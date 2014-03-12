<?php
    namespace Application\View;
    /*
     * Class for displaying lists of views. Any class that utilizes this view 
     * adheres to the Listable protocol. 
     * 
     * @Package View
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class ListView extends CDView
    {
        public $rowTemplate;
        private $rows;
        
        
        
        public function format()
        {
            parent::format();
            $this->rowTemplate=$this->viewModel->formatRowView();
        }
        public function render($show=TRUE)
        {
            foreach($this->viewModel->getRows() as $row){
            $rowView=new $this->rowTemplate($row);
                $this->html .= $rowView->render();
            }
            
            if($show){
                $this->show();
            }
        }
    }
?>