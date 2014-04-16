<!DOCTYPE html>
<html>
    <head>

        <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                selector: "textarea",
                theme: "modern",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "template paste"
                ],
                toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                toolbar2: "print preview media | forecolor backcolor",
                templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
                ],
            });
        </script>
        <script src="/js/jquery.js"></script>
        <script src="/js/chili.js"></script>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-responsive.min');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->css('chili');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container container-admin">
            <div id="header">
            </div>
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span2">
                            <div class="navbar-vertical">
                                <ul>
                                    <div class="nav1">
                                        <h4><?php echo $this->Html->image('icons/travels-icon.png', array('class' => 'admin-icon')); ?><a href="#">Putovanja</a></h4>
                                        <div class="nav-items1">
                                            <li><?php echo $this->Html->image('icons/add-icon.png'); ?><?php echo $this->Html->link(__('Dodaj putovanje'), array('controller' => 'travels', 'action' => 'add')); ?></li>
                                            <li><?php echo $this->Html->image('icons/list-icon.png'); ?><?php echo $this->Html->link(__('Pregled putovanja'), array('controller' => 'travels', 'action' => 'index')); ?></li>
                                        </div>
                                    </div>
                                    <div class="nav1">
                                        <h4><?php echo $this->Html->image('icons/categories-icon.png', array('class' => 'admin-icon')); ?><a href="#">Kategorije</a></h4>
                                        <div class="nav-items1">
                                            <li><?php echo $this->Html->image('icons/add-icon.png', array('alt' => 'CakePHP')); ?><?php echo $this->Html->link(__('Dodaj kategoriju'), array('controller' => 'categories', 'action' => 'add')); ?></li>
                                            <li><?php echo $this->Html->image('icons/list-icon.png', array('alt' => 'CakePHP')); ?><?php echo $this->Html->link(__('Sve kategorije'), array('controller' => 'categories', 'action' => 'index')); ?></li>
                                        </div>
                                    </div>
                                    <div class="nav1">
                                        <h4><?php echo $this->Html->image('icons/accomodations-icon.png', array('class' => 'admin-icon')); ?><a href="#">Smještaj</a></h4>
                                        <div class="nav-items1">
                                            <li><?php echo $this->Html->image('icons/add-icon.png'); ?><?php echo $this->Html->link(__('Dodaj smještaj'), array('controller' => 'accomodations', 'action' => 'add')); ?></li>
                                            <li><?php echo $this->Html->image('icons/list-icon.png'); ?><?php echo $this->Html->link(__('Pregled smještaja'), array('controller' => 'accomodations', 'action' => 'index')); ?></li>
                                        </div>
                                    </div>
                                    <div class="nav1">
                                        <h4><?php echo $this->Html->image('icons/locations-icon.png', array('class' => 'admin-icon')); ?><a href="#">Lokacije</a></h4>
                                        <div class="nav-items1">
                                            <li><?php echo $this->Html->image('icons/add-icon.png'); ?><?php echo $this->Html->link(__('Dodaj lokaciju'), array('controller' => 'locations', 'action' => 'add')); ?></li>
                                            <li><?php echo $this->Html->image('icons/list-icon.png'); ?><?php echo $this->Html->link(__('Pregled lokacija'), array('controller' => 'locations', 'action' => 'index')); ?></li>
                                        </div>
                                    </div>
                                    <div class="nav1">
                                        <h4><?php echo $this->Html->image('icons/blogs-icon.png', array('class' => 'admin-icon')); ?><a href="#">Blog</a></h4>
                                        <div class="nav-items1">
                                            <li><?php echo $this->Html->image('icons/add-icon.png'); ?><?php echo $this->Html->link(__('Novi blog post'), array('controller' => 'blogs', 'action' => 'add')); ?></li>
                                            <li><?php echo $this->Html->image('icons/list-icon.png'); ?><?php echo $this->Html->link(__('Pregled postova'), array('controller' => 'blogs', 'action' => 'index')); ?></li>
                                        </div>
                                    </div>
                                    <div class="nav1">
                                        <h4><?php echo $this->Html->image('icons/users-icon.png', array('alt' => 'CakePHP', 'class' => 'admin-icon')); ?><a href="#">Korisnici</a></h4>
                                        <div class="nav-items1">
                                            <li><?php echo $this->Html->image('icons/add-icon.png'); ?><?php echo $this->Html->link(__('Novi korisnik'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                                            <li><?php echo $this->Html->image('icons/list-icon.png'); ?><?php echo $this->Html->link(__('Pregled korisnika'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                                        </div>           
                                    </div>
                                    <div class="nav1">
                                        <h4><?php echo $this->Html->link('Odjava', array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-primary')); ?> </h4>      
                                    </div>
                                </ul>					
                            </div>
                        </div>
                        <div class="span10" id="main">
                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
            </div>
        </div>
    </body>
</html>
