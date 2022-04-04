<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>

    <?php if(isset($_POST['yes'])){ print_r($_POST['field_name']); } ?>

    <form method="POST">
        <div class="field_wrapper">
            <div>
                <input type="text" name="field_name[]" value="" />
                <a href="javascript:void(0);" class="add_button" title="Add field">add button</a>
            </div>
        </div>
        <div>
            <input type="submit" name="yes" />
        </div>
    </form>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10;
        var addButton = $('.add_button');
        var wrapper = $('.field_wrapper');
        var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button">remove button</a></div>';
        var x = 1;

        $(addButton).click(function(){
            if(x < maxField){
                x++;
                $(wrapper).append(fieldHTML);
            }
        });

        $(wrapper).on('click','.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });
</script>