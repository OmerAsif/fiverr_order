
<div class="request-list">

    <div class="row">
        <?php
        $name = "";
        $message = "";
        if (isset($detail[0])) {
            foreach ($detail as $key => $val) {
                $name = $val['name'];
                $message = $val['message'];
                ?>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <?php
                    echo "<h1>Name: " . $name . "</h1>";
                }
                ?>

            </div>
            <?php
        } else {
            echo "<h1>Incomplete Request</h1>";
        }
        ?>


    </div>

    <table class="table table-bordered table-nonfluid table-responsive">
        <thead>



            <tr>
                <th>ID do pedido</th>
                <th>Tipo de Propriedade</th>
                <th>Crédito</th>
                <th>Entrada</th>
                <th>Prestações</th>
                <th>Administradora</th>
                <th>Situação</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
            foreach ($data as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value['interest_request_id'] ?></td>
                    <td><?php echo $value['property_type'] ?></td>
                    <td><?php echo $fmt->formatCurrency($value['credit'], "BRL") ?></td>
                    <td><?php echo $fmt->formatCurrency($value['input'], "BRL") ?></td>
                    <td><?php echo $value['installments'] ?></td>
                    <td><?php echo $value['administrator'] ?></td>
                    <td><?php echo $value['situation'] ?></td>
                    <td><?php echo $value['note'] ?></td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h3>Message: <?php echo $message;?></h3>
    </div>
</div>
<br/>
<br/>
<br/>
<div class="form-group">
    <div class="form-group form-group form-inline">
        <label for="save_actiom">Select Action</label>

        <select id="action_option" class="form-control">

            <?php
            foreach ($status as $key => $val) {
                echo '<option id="' . $val['id'] . '">' . $val['name'] . '</option>';
            }
            ?>

        </select>
        <button id="save_action" class="btn btn-primary" style="margin-left: 10px">Apply Action</button>

    </div>

</div>