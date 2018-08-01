<?php /* Smarty version 2.6.26, created on 2018-07-18 19:10:36
         compiled from common/navbar.tpl */ ?>
<style>
    ul.menu li {
        width:110px !important;
    }
    ul.menu li:hover,ul.menu li a:hover
    {
        background-color: #ee5230 !important;
    }
    ul.menu li a
    {
      font-size: 14px !important;
    }
    .bradius
    {
        border-radius:5px;
    }
</style>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/navbar.tpl', 13, false),array('function', 'translate', 'common/navbar.tpl', 13, false),array('function', 'call_hook', 'common/navbar.tpl', 42, false),array('modifier', 'escape', 'common/navbar.tpl', 46, false),)), $this); ?>
    <ul id="main-navigation" class="nav navbar-nav " style="padding-right:0px !important;">
        <?php $menu=(isset($_GET['home']))?"activeclass":"";?>
        <li class="">
            <?php $home=(isset($_GET['home']))?"active":"";?>
            <a  class="<?=$home?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>?home=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
            </a></li>

        <li  class="" >
            <?php $about=(isset($_GET['about']))?"active":"";?>
            <a class="<?=$about?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>?about=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
            </a></li>

        <?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
            <?php $mhome=(isset($_GET['mhome']))?"active":"";?>
            <li class=" " >
                <a  class="<?=$mhome?>" href="<?php if ($this->_tpl_vars['hasOtherJournals']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'user'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>?mhome=1s
<?php endif; ?>"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
                </a></li>
        <?php else: ?>
            <li class=" " >
                <?php $login=(isset($_GET['login']))?"active":"";?>
                <a class="<?=$login?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>?login=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
                </a></li>
            <?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
                <li class=" " >
                    <?php $reg=(isset($_GET['register']))?"active":"";?>
                    <a class="<?=$reg?>" style="display:none;" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>?register=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
                    </a></li>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['siteCategoriesEnabled']): ?>
            <li class=" ">
                <?php $cat=(isset($_GET['cat']))?"active":"";?>
                <a class="<?=$cat?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'search','op' => 'categories'), $this);?>?cat=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.categories"), $this);?>
                </a></li>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['currentJournal'] || $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
            <li class=" " >
                <?php $search=(isset($_GET['search']))?"active":"";?>
                <a class="<?=$search?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search'), $this);?>?search=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
                </a></li>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
            <li class=" ">
                <?php $current=(isset($_GET['current']))?"active":"";?>
                <a  class="<?=$current?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'current'), $this);?>?current=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.current"), $this);?>
                </a></li>
            <li class=" ">
                <?php $archive=(isset($_GET['archive']))?"active":"";?>
                <a class="<?=$archive?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'archive'), $this);?>?archive=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>
                </a></li>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['enableAnnouncements']): ?>
            <li class=" " >
                <?php $ann=(isset($_GET['ann']))?"active":"";?>
                <a class="<?=$ann?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>?ann=1s
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>
                </a></li>
        <?php endif; ?>
        <?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Header::Navbar::CurrentJournal"), $this);?>


        <?php $_from = $this->_tpl_vars['navMenuItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
            foreach ($_from as $this->_tpl_vars['navItemKey'] => $this->_tpl_vars['navItem']):
                ?>
                <?php if ($this->_tpl_vars['navItem']['url'] != '' && $this->_tpl_vars['navItem']['name'] != ''): ?>
                <li class="" id="navItem-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
                        <?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['navItem']['name']), $this);?>
                        <?php endif; ?></a></li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        <?php //print_r($_SESSION);?>
        <?php if ($this->_tpl_vars['isUserLoggedIn']) { ?>
        <li class="  dropdown ">
            <a href="#" class="">
                 <?=$_SESSION['username']?> <i class="fa fa-user" style="font-size:20px;color:red"></i>
            </a>
            <ul class="dropdown-menu">
                <?php $myprofile=$this->_tpl_vars['baseUrl']."/index.php/pc/user/profile";?>
                <li class="" style="background: #E0E0E0">
                    <a href="<?=$myprofile?>">
                        Myprofile
                    </a>
                </li>
                <?php $logouturl=$this->_tpl_vars['baseUrl']."/index.php/pc/login/signOut";?>
                <li class="" style="background: #E0E0E0">
                    <a href="<?=$logouturl?>">
                        Logout
                    </a>
                </li>
                <br>
            </ul>
        <?php } ?>
        <li class=" ">
            <a  href="#">
                <img class="bradius" style="width:25px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/300px-Facebook_icon_2013.svg.png"></a></li>
        <li class=" ">
            <a  href="#">
                <img class="bradius" style="width:25px" src="https://pbs.twimg.com/profile_images/1013798240683266048/zRim1x6M_400x400.jpg"></a></li>

