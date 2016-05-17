<?php
use PFBC\FormBuilder;

session_start();
error_reporting(E_ALL);
include("PFBC/Form.php");

if (isset($_POST["form"])) {
    FormBuilder::isValid($_POST["form"]);
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

include("header.php");
$version = file_get_contents("version");
?>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>PHP Form Builder</h1>
            </div>
            <div class="col-md-12">
                <div class="well">


                    <?php
                    $form = new FormBuilder("Form-ID");
                    $form->textbox("My Textbox:", "MyTextbox");
                    $form->select("My Select:", "MySelect", [
                        "Option #1",
                        "Option #2",
                        "Option #3"
                    ]);
                    $form->button();
                    $form->render();
                    ?>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

    </div><!-- /.container -->

<?php
include("footer.php");
