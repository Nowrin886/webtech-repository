<?php

    /**
    * The home page controller
    */
    class IndexController
    {
      

        public function sayWelcome()
        {
            return $this->welcomeMessage();
        }

    }