<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResultCredit.class.php';
require_once $conf->root_path.'/app/CalcResultSum.class.php';
// wzorowanie na przykladzie kontrolera kalkulatora
// @author Przemysław Kudłacik
class CalcCtrl {

	private $msgs;   
	private $form;   
	private $resultCredit; 
    private $resultSum; 
    private $interestCredit;
    private $sumMonthly;

	public function __construct(){
		$this->msgs = new Messages();
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
            $this->msgs->addError('Nie podano kwoty kredytu!');
        }
        if ( $this->form->installment == "") {
            $this->msgs->addError('Nie podano liczby rat kredytu!');
        }
        if ( $this->form->installment == "") {
            $this->msgs->addError('Nie podano wartości oprocentowaniea!');
        }

        if (! $this->msgs->isError()) {
        if (($this->form->installment<=0) OR (!is_numeric($this->form->installment) )) {
            $this->msgs->addError('Liczba rat kredytu musi być liczbą większą od zera!');
        }	
        if (($this->form->sum<=0) OR (!is_numeric($this->form->sum) )) {
            $this->msgs->addError('Liczba całkowita kredytu musi być liczbą większą od zera!');
        }	
        if (($this->form->interest<0) OR (!is_numeric($this->form->interest) )) {
            $this->msgs->addError('Liczba oprocentowania kredytu musi być liczbą większą lub równą zero!');
        }
        }	
    return ! $this->msgs->isError();
    }

	public function process(){
		$this->getparams();
		if ($this->validate()) {
			$this->form->sum = intval($this->form->sum);
			$this->form->interest = intval($this->form->interest);
            $this->form->installment = intval($this->form->installment);
			$this->msgs->addInfo('Parametry są poprawne.');
				
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
			
			$this->msgs->addInfo('Wykonano obliczenia!');
		}
		
		$this->generateView();
	}
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Podejście obiektowe kalkulatora z biblioteką Smarty');
        $smarty->assign('page_header','Obiektowość - podstawy');
		$smarty->assign('form',$this->form);
		$smarty->assign('resC',$this->resultCredit);
		$smarty->assign('resS',$this->resultSum);
        $smarty->assign('msgs',$this->msgs);
		
		$smarty->display($conf->root_path.'/app/calc.html');
	}
}
