<?php
namespace app\appCtrls;
use app\appForms\CalcForm;
use app\appResults\CalcResultSum;
use app\appResults\CalcResultCredit;
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

	public function process(){
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
		}
		
		$this->generateView();
	}
	
	public function generateView(){
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_header','Jeden punkt wejścia!');		
		getSmarty()->assign('page_description','Kontroler z użyciem przestrzeni nazw i automatycznego ładowania klas');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('resS',$this->resultSum);
		getSmarty()->assign('resC',$this->resultCredit);
		getSmarty()->display('calc.html'); 
	}
}
