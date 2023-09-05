<?php
  include_once("../../mehnatLibrary/global.php");
  inclall("page.php");
  class chome extends cpage
    {
    function content()
      {
        debug("here");
      // $p= new cini();
      // $p->draw();
      return 0;
      }
    function chome()
      {
      // parent::__construct();
      $this->x= new cmylib();
      $this->x->register($this);
      // $this->x->parse_ini('../AccountModule/lib/page.htm');
      }
    };
  $o= new chome();
  $o->page();
  ?>
