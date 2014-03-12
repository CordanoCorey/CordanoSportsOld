<?php
    namespace Application\Controller;
    use \Application\Model\Leagues\League as League;
    use \Application\View\ListView as ListView;
    use \Application\ModelView\LeaguesView as LeaguesView;
    use \Application\View\CDView as CDView;
    /*
     * Main Controller for incoming requests. 
     * 
     * The controllers main jobs are to:
     *      1. Invoke the model and call the request action.
     *      2. Pass the updated domain state to the view model (which updates the application state).
     *      3. Forward the updated application state to the client via the view.
     *      4. Adhere to interface user event listening protocol.
     */
    Class CDController
    {
        /*
         * @param User
         */
        protected $user;
        /*
         * @param CDRequest
         */
        protected $request;
        /*
         * 
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
         * @param CDRequest $request
         */
        public function __construct($request)
        {
            $this->request=$request;
        }
        
        /*
         * Invoke the model and call request action.
         * 
         * @return CDModel
         */
        public function invoke(){
            //$response = $this->model->$this->request->action();
            //$this->model=$response;
            $name=["National Basketball Association (NBA)","National Football League (NFL)","Carlisle Army War College Intramurals"];
            $status=["Pro Basketball","Pro Football","Rec Basketball"];
            $leagues[]=new League(1,$name[0],$status[0]);
            $leagues[]=new League(2,$name[1],$status[1]);
            $leagues[]=new League(3,$name[2],$status[2]);
            $this->model=$leagues;
        }
        
        /*
         * Pass the updated domain state to the view model (which updates the application state),
         * then forward the updated application state to the client via the view.
         * 
         * @param bool $view
         */
        public function processRequest($view=FALSE)
        {
            $viewModel=new LeaguesView($this->model);
            return new ListView($this,$viewModel);
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
                return "home.php";
            }
            else{
                return "main.php";
            }
        }
        
        /*
         * Load the appropriate view for representing the response.
         * 
         * @param ViewModel $viewModel
         */
        public function view($viewModel)
        {
            return new CDView($this,$viewModel);
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
?>