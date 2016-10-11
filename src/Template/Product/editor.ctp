<?= $this->Html->css('jquery.filer.css') ?>
<?= $this->Html->css('themes/jquery.filer-dragdropbox-theme.css') ?>

<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<?= $this->Html->script('jquery.filer.min.js') ?>

<section class="content-header">
    <h1>
        Fixed Layout
        <small>Blank example to the fixed layout</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li>
    </ol>
</section>

<form action="./php/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" id="filer_input" multiple="multiple">
    <input type="submit" value="Submit">
</form>
<script>
    $(document).ready(function() {
        //$('#filer_input').filer();
        alert("bhim");
    });
</script>