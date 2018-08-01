<?php if(isset($_GET['current']) || empty($_GET['current'])) { ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
    smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/view.tpl', 13, false),array('function', 'url', 'issue/view.tpl', 25, false),array('modifier', 'to_array', 'issue/view.tpl', 25, false),array('modifier', 'assign', 'issue/view.tpl', 25, false),array('modifier', 'escape', 'issue/view.tpl', 33, false),array('modifier', 'strip_unsafe_html', 'issue/view.tpl', 34, false),array('modifier', 'nl2br', 'issue/view.tpl', 34, false),)), $this); ?>
    <?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['showToc']): ?>
        <div id="accessKey">
            <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
            <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.openAccess"), $this);?>
            &nbsp;
            <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
            <?php if ($this->_tpl_vars['purchaseArticleEnabled']): ?>
                <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionOrFeeAccess"), $this);?>

            <?php else: ?>
                <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionAccess"), $this);?>

            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if (! $this->_tpl_vars['showToc'] && $this->_tpl_vars['issue']): ?>
        <?php if ($this->_tpl_vars['issueId']): ?>
            <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, 'showToc') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'showToc'))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

        <?php else: ?>
            <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'current','path' => 'showToc'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

        <?php endif; ?>
        <ul class="menu">
            <li><a href="<?php echo $this->_tpl_vars['currentUrl']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
                </a></li>
        </ul>
        <br />
        <?php if ($this->_tpl_vars['coverPagePath']): ?><div id="issueCoverImage"><a href="<?php echo $this->_tpl_vars['currentUrl']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getFileName($this->_tpl_vars['coverLocale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['coverPageAltText'] != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.coverPage.altText"), $this);?>
"<?php endif; ?><?php if ($this->_tpl_vars['width']): ?> width="<?php echo ((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['height']): ?> height="<?php echo ((is_array($_tmp=$this->_tpl_vars['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>/></a></div><?php endif; ?>
        <div id="issueCoverDescription"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverPageDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
        </div>
    <?php elseif ($this->_tpl_vars['issue']): ?>
        <div id="issueDescription"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
        </div>
        <?php if ($this->_tpl_vars['issueGalleys']): ?>
            <h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.fullIssue"), $this);?>
            </h3>
            <?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['issue']->getAccessStatus() == @ISSUE_ACCESS_OPEN || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] || ( $this->_tpl_vars['subscriptionExpiryPartial'] && $this->_tpl_vars['issueExpiryPartial'] ) )): ?>
                <?php $this->assign('hasAccess', 1); ?>
            <?php else: ?>
                <?php $this->assign('hasAccess', 0); ?>
            <?php endif; ?>
            <table class="tocArticle" width="100%">
                <tr valign="top">
                    <td class="tocTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.viewIssueDescription"), $this);?>
                    </td>
                    <td class="tocGalleys">
                        <?php if ($this->_tpl_vars['hasAccess'] || ( $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] )): ?>
                            <?php $_from = $this->_tpl_vars['issueGalleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
                                foreach ($_from as $this->_tpl_vars['issueGalley']):
                                    ?>
                                    <?php if ($this->_tpl_vars['issueGalley']->isPdfGalley()): ?>
                                    <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'viewIssue','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getBestIssueId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['issueGalley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'viewDownloadInterstitial','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getBestIssueId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['issueGalley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['issueGalley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
                                    </a>
                                <?php endif; ?>
                                    <?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['restrictOnlyPdf']): ?>
                                    <?php if ($this->_tpl_vars['issue']->getAccessStatus() == @ISSUE_ACCESS_OPEN || ! $this->_tpl_vars['issueGalley']->isPdfGalley()): ?>
                                        <img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
                                    <?php else: ?>
                                        <img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            <?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && ! $this->_tpl_vars['restrictOnlyPdf']): ?>
                                <?php if ($this->_tpl_vars['issue']->getAccessStatus() == @ISSUE_ACCESS_OPEN): ?>
                                    <img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
                                <?php else: ?>
                                    <img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
            <br />
        <?php endif; ?>
        <h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
        </h3>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
        $this->_smarty_include(array('smarty_include_tpl_file' => "issue/issue.tpl", 'smarty_include_vars' => array()));
        $this->_tpl_vars = $_smarty_tpl_vars;
        unset($_smarty_tpl_vars);
        ?>
    <?php else: ?>
        <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>

    <?php endif; ?>
<?php }
else if(!empty($_GET['home'])) { ?>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <style>
        .top-buffer { margin-top:20px; }
        .pd
        {
            padding:20px;
            border-left: 4px solid #4CAF50;
            border-right: 4px solid #4CAF50;
            border-radius:5px;
        }
        .modal-body {
            max-height: calc(100vh - 210px);
            overflow-y: auto;
        }
        .modal-dialog
        {
            width:80%;
            height:auto;
        }
    </style>
    <?php
    include "database/db.php";
    //print_r($_SESSION);die;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM home_nav";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_array()) {
            $row[]=$row;
            echo  '<div class="row top-buffer pd" style="background: #E0E0E0">
        <div class="col-lg-12">
            <div class="col-lg-10">' . $row['type'] . '
            
            </div>
            <div class="col-lg-1">
                <a data-toggle="modal" href="#myModalview'.$row['id'].'" class="btn btn-info" style="color:#fff"><i class="fa fa-eye"></i> View</a>
            </div>';
           if($_SESSION['userId'] ==1 && !empty($_SESSION['userId'])) {
              echo  '<div class="col-lg-1">
                <a data-toggle="modal" href="#myModalupdate'.$row['id'].'" class="btn btn-primary" style="color:#fff"><i class="fa fa-edit"></i> Edit</a>
            </div>';
            }
        echo '</div>
    </div>
    <div id="myModalview'.$row['id'].'" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="btn btn-default" style="float:right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <h4 class="modal-title">'.$row['type'].'</h4>
                </div>
                <div class="modal-body">'.$row['body_text'].'
                </div>
            </div>
        </div>
    </div>
    <div id="myModalupdate'.$row['id'].'" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
            <form method="post" action="%%5D^5DD^5DDD4904%%view.tpl.php"  id="home_'.$row['id'].'" name="formeditorial_'.$row['id'].'">
                <div class="modal-header">
                    <a class="btn btn-default" style="float:right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <h4 class="modal-title">'.$row['type'].'</h4>
                </div>
                <div class="modal-body">
                       <p><input type="hidden" class="form-control" id="hiden_'.$row['id'].'" value="'.$row['id'].'" name="recordid"></p>
                        <p><input type="text" class="form-control" id="heading_'.$row['id'].'" value="'.$row['type'].'" name="heading" id="email" placeholder="heading" ></p>
                        <p><textarea class="editor1" id="para_'.$row['id'].'" name="editor'.$row['id'].'" >'.$row['body_text'].'</textarea></p>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <input type="reset" id="test" class="btn btn-danger" data-dismiss="modal">
                        <input type="submit" name="save" data-id='.$row['id'].' class="sbt btn btn-primary">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>';
        }
    } else {
        echo "0 results";
    }
    ?>
    <script>
        $(document).ready(function() {
            var editorInstance;
            if (CKEDITOR) {
                if (editorInstance) {
                    editorInstance.destroy();
                    editorInstance = undefined;
                } else {
                    editorInstance = CKEDITOR.replace('editor1');
                    editorInstance = CKEDITOR.replace('editor2');
                    editorInstance = CKEDITOR.replace('editor3');
                    editorInstance = CKEDITOR.replace('editor4');
                    editorInstance = CKEDITOR.replace('editor5');
                    editorInstance = CKEDITOR.replace('editor6');
                    editorInstance = CKEDITOR.replace('editor7');
                }
            }
        });
        CKEDITOR.on('instanceReady', function(){
            $.each( CKEDITOR.instances, function(instance) {
                CKEDITOR.instances[instance].on("change", function(e) {
                    console.log(123);
                    for ( instance in CKEDITOR.instances )
                        CKEDITOR.instances[instance].updateElement();
                });
            });
        });
        $('.sbt').on('click', function() {
            if(confirm('Are you sure want to update ?')) {
                var $form = $(this).data('id'); // get the form element this button belongs to

                var formData = new FormData($('#home_' + $form)[0]);
                $.ajax({
                    url: '<?php echo $this->_tpl_vars['baseUrl'] . '/save.php' ?>',
                    type: "post",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (result) {
                       var result=JSON.parse(result);
                       if(result.flag =="S")
                       {
                           alert("Success");
                           window.location.reload();
                       }
                       else
                       {
                           alert("failiure");
                       }
                    }
                });
            }
        })
    </script>
<?php } ?>
