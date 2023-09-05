<?php
  include_once("../../mehnatLibrary/global.php");
  // include_once("mylib.php");
  // inclall("mylib.php");
  class cpage
      {
      public $x;
      //
      function esp($sect)  { return $this->x->reprint_sect($sect); }
      function content()   { $this->esp("home_content_dc"); return 0; }
      function page0()     { return 0; }
      function page1()
        {
        $this->esp("HTML0");
          $this->esp("LP_NAV0");
            $this->esp("MENU0");
              $this->esp("MENU1");
            $this->esp("MENU2");
          $this->esp("LP_NAV2");
          //
          $this->esp("CONTENT0");
            $this->esp("CONTENT_NAV0");
              $this->esp("CONTENT_NAV_SEARCH");
              $this->esp("CONTENT_NAV_RIGHT_MULTI");
            $this->esp("CONTENT_NAV2");
            //
            $this->esp("ACTUAL_CONTENT0");
            $this->content();
            $this->esp("ACTUAL_CONTENT2");
            $this->esp("FOOTER");
          $this->esp("CONTENT2");
        $this->esp("HTML2");
        return 0;
        }
      function page2() { return 0; }
      function page()
        {
        $this->page0();
          $this->page1();
        $this->page2();
        return 0;
        }
      // function cpage()  { }
      function __construct()
        {
        $this->x= new cmylib();
        $this->x->register($this);
        $this->x->parse_ini('../lib/page.htm');
        }
      };
  ?>
