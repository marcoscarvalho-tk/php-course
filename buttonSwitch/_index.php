<?php
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao, 'test'); 

$result = mysqli_query($conexao,"SELECT * FROM cadastro");
?>
<body style="background-color:gray">
    <script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
</script>
 <div>
    <table id="datatables" class="display">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Text</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["nome"]; ?></td>
                <td><?php echo $row["adm"]; ?></td>
                <td>
                    <div class="onoffswitch">
                        <input type="hidden" value="<?php echo $row["id"]; ?>" />
                        <input type="checkbox" class="onoffswitch-checkbox"
                            <?php
                            if($row['adm']=="on")
                            {
                                echo "checked";
                            }
                            ?>>
                        
                    </div>
                    <div id="display">
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
   
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $('.onoffswitch').click(function(){
                var hiddenValueID = $(this).children(':hidden').val();
                if ($(this).children(':checked').length == 0)
                {
                    var valueData = 'off';
                }
                else
                {
                    var valueData = 'on';
                }

                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: {value: valueData, id: hiddenValueID} ,
                    done: function(html){
                        $("#display").html(html).show();
                    }
                });

            });
        });
    </script>

</body>
