<?php
    namespace application\controller;
    use application\model\elements\leagues\League as League;
    use \application\view\model\collections\LeaguesView as LeaguesView;
    use \application\view\ListView as ListView;
    /*
    * Main Controller for incoming requests. 
    * 
    * The controllers main jobs are to:
    *      1. Invoke the model and call the request action.
    *      2. Pass the updated domain state to the view model (which updates the application state).
    *      3. Forward the updated application state to the client via the view.
    *      4. Adhere to interface user event listening protocol.
    * 
    * @package main
    * @author coreygelbaugh
    * @version 1.0
    */
    Class CDController
    {
        public $layout="layouts/main.php";
        public $background="bg-index.jpg";
        public $title="Cordano :: Believe the Hype";
        public $views=["question","answer"];
        public $format=["json","scroll"];
        /*
         * @param User
         */
        protected $user;
        /*
         * @param UserRequest
         */
        protected $request;
        /*
         * @param Collectable[]
         */
        protected $model;
        /*
         * @param string    ViewModel to be (re)loaded.
         */
        public $target;
        /*
         * @param ModelView     The sender of the request will be a ModelView object.
         */
        protected $sender;
        /*
         * @param CDEngine
         */
        private $engine;
        
        /*
         * @param CDRequest $request
         */
        public function __construct($request,$engine)
        {
            $request->user=$this->user;
            $request->sender=$this->sender;
            $this->engine=$engine;
        }
        
        /*
         * Invoke the model and call request action.
         * 
         * @return 
         */
        public function invoke(){
            $response = $this->model->$this->request->action();
            $this->model=$response;
        }
        
        /*
         * Pass the updated domain state to the view model (which updates the application state),
         * then forward the updated application state to the client via the view.
         * 
         * @param bool $view
         */
        public function processRequest()
        {
            return $this->renderView("LeaguesView","application\view\ListView");
            /*
            $viewModel=new $this->target($this->model);
            if($view){
                $this->view($viewModel);
            }
            else{
                $this->deploy($viewModel);
            }*/
        }
        /*
         * The incoming request is for a new page, so the page layout
         * must be included.
         * 
         * 
         */
        public function index()
        {
            if($this->request->loggedIn){
                return "layouts/home.php";
            }
            else{
                return "layouts/main.php";
            }
        }
        
        /*
         * Load the appropriate view for representing the response.
         * 
         * @param ViewModel $viewModel
         * @return CDView
         */
        public function renderView($viewModel,$view)
        {
            
            $viewModel=new LeaguesView($this->model);
            return new ListView($this,$viewModel);
        }
        
        /*
         * 
         */
        public function deploy()
        {
            switch($this->request->responseFormat){
                case "json":
                    break;
                default:
                    break;
            }
        }
    }