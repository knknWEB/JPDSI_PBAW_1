<?php
namespace app\appCtrls;
use app\appForms\CalcForm;
use app\appResults\CalcResultSum;
use app\appResults\CalcResultCredit;
use app\appResults\Records;
class CalcCtrl {

	private $form;   
	private $resultCredit; 
    private $resultSum; 
    private $interestCredit;
    private $sumMonthly;

   
	public function __construct(){
	
		$this->form = new CalcForm();
		$this->resultCredit = new CalcResultCredit();
        $this->resultSum = new CalcResultSum();
	}
	
	public function getParams(){
        $this->form->sum = isset($_REQUEST['sum']) ? $_REQUEST['sum'] : null;
        $this->form->installment = isset($_REQUEST['installment']) ? $_REQUEST['installment'] : null;
        $this->form->interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;	
	}

	public function validate() {
        if ( ! (isset($this->form->sum) && isset($this->form->installment) && isset($this->form->interest))) {
		    return false;
	    }
        // sprawdzenie, wartosci potrzebne zostały przekazane
        if ( $this->form->sum == "") {
            getMessages()->errTab('Nie podano kwoty kredytu!');
        }
        if ( $this->form->installment == "") {
            getMessages()->errTab('Nie podano liczby rat kredytu!');
        }
        if ( $this->form->installment == "") {
            getMessages()->errTab('Nie podano wartości oprocentowaniea!');
        }

        if (! getMessages()->isError()) {
        if (($this->form->installment<=0) OR (!is_numeric($this->form->installment) )) {
            getMessages()->errTab('Liczba rat kredytu musi być liczbą większą od zera!');
        }	
        if (($this->form->sum<=0) OR (!is_numeric($this->form->sum) )) {
            getMessages()->errTab('Liczba całkowita kredytu musi być liczbą większą od zera!');
        }	
        if (($this->form->interest<0) OR (!is_numeric($this->form->interest) )) {
            getMessages()->errTab('Liczba oprocentowania kredytu musi być liczbą większą lub równą zero!');
        }
        }	
    return ! getMessages()->isError();
    }

	public function action_calcCompute(){
		$this->getparams();
		if ($this->validate()) {
			$this->form->sum = intval($this->form->sum);
			$this->form->interest = intval($this->form->interest);
            $this->form->installment = intval($this->form->installment);
			getMessages()->infoTab('Parametry są poprawne.');
				
			//wykonanie operacji
			if($this->form->interest==0){	//wykona tylko jeżeli oprocentowanie jest równe zero
                $this->form->resultSum=$this->form->sum/$this->form->installment;
                $this->form->resultCredit=$this->form->sum;
            }
            //oblicznia dla pozostalych przypadkow - oprocentowanie > 0
            else{
                $interestCredit = $this->form->interest / 1200;
                $interestCredit = round($interestCredit, 7);
                $sumMonthly = ($interestCredit + $interestCredit / (pow($interestCredit + 1, $this->form->installment) - 1)) * $this->form->sum;
                $sumMonthly = round($sumMonthly, 2);	
                $this->form->resultSum = $sumMonthly;
                $this->form->resultCredit = $sumMonthly * $this->form->installment;
            }
			
			getMessages()->infoTab('Wykonano obliczenia!');
            try{
                $database = new \Medoo\Medoo([
                    // [required]
                    'type' => 'mysql',
                    'host' => 'localhost',
                    'database' => 'kalk',
                    'username' => 'root',
                    'password' => '',
                
                    // [optional]
                    'charset' => 'utf8',
                    'collation' => 'utf8_polish_ci',
                    'port' => 3306,
                
                    'option' => [
                        \PDO::ATTR_CASE => \PDO::CASE_NATURAL
                      //  \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                    ],
                
                    // [optional] Medoo will execute those commands after connected to the database.
                    'command' => [
                        'SET SQL_MODE=ANSI_QUOTES'
                    ]
                ]);
                $database-> insert("kredyt", [
                "kwota"=> $this->form->sum,
                "liczbaRat"=>$this->form->interest,
                "oprocentowanie"=> $this->form->installment,
                "miesiecznaRata"=>  $this->form->resultSum,
                "kosztKredytu"=> $this->form->resultCredit,
                "data"=> date("Y-m-d M:i:s")
                
                
                ]);
            } catch (\PDOException $ex)
            {
                getMessages()->errTab("DB ERROR:".$ex->getMessage());
            }

		}
		
		$this->generateView();
	}

    public function action_calcShow(){
		getMessages()->infoTab('Witaj w kalkulatorze');   
       

		$this->generateView();
	}
	
public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('resS',$this->resultSum);
        getSmarty()->assign('resC',$this->resultCredit);


		getSmarty()->display('calc.html');
	}
}

