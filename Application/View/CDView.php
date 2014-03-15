<?php
    namespace application\view;
    //use application\view\js\CDObserver as CDObserver;
    /*
     * The CDView class implements the methods common to all Cordano views.
     * 
     * The views main jobs are to:
     *      1. Set its formatting properties according to the view model's specifications.
     *      2. Set its observing properties according to the controller's specifications.
     *      3. Deliver itself to the appropriate layout or dispatcher to be rendered and delivered.
     *      4. Render its content using services and/or templates.
     *      5. Listen for user event triggers.
     * 
     * @Package View
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class CDView
    {
        protected $html="";
        protected $js="";
        protected $json="";
        protected $xml="";        
        protected $viewModel;
        protected $controller;
        protected $template;
        /*
         * string $responseFormat
         */
        public $responseFormat="PHP";
        
        /*
         * @param CDView[]
         */
        private $subviews;
        
        public function __construct($controller,$viewModel)
        {
            $this->controller=$controller;
            $this->viewModel=$viewModel;
            $this->format();
        }
        /*
         * Set formatting properties according to the view model's specifications.
         */
        public function format()
        {
            //$this->template=$this->viewModel->formatView();
        }
        
        /*
         * Render content using services and/or templates.
         * 
         * @param bool $show
         */
        public function render($show=TRUE)
        {
            $this->html = \CDTemplate::$this->template($this->viewModel);
            
            if($show){
                $this->show();
            }
        }
        
        /*
         * Print content to the window.
         */
        public function show(){
            if($this->html){
                echo $this->html;
            }
            else{
                echo "Not Available";
            }
        }
        /*
         * Deliver self to the appropriate layout or dispatcher to be rendered and delivered.
         * 
         */
        public function output()
        {
            $_SESSION["view"]=$this;
            include $this->controller->index();
        }
        /*
         * Set its observing properties according to the controller's specifications.
         * Render javascript event handler functions.
         */
        public function observe()
        {
            $obs=new \CDObserver($this->controller->layout);
            $this->js.=$obs->jsInit();
            //$js.=$obs->addListener($this->controller,$this->viewModel);
            echo $this->js;
        }
    }
?>