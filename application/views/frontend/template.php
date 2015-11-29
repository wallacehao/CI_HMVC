<?php 
    $this->load->view('frontend/top.php');
    $this->load->view('frontend/left.php');
    $this->load->view('frontend/hot_news.php');
?>
                
    <div id="main">
        <?php 
            $this->load->view($loadpage);
        ?>                
    </div><!-- End main -->
    <?php 
        $this->load->view('frontend/right.php');
        $this->load->view('frontend/bottom.php');
    ?>
      

</body>
</html>