<?php /* Smarty version 2.6.11, created on 2022-07-18 08:29:07
         compiled from custom/modules/P_CustomInvoices/tpls/customProductInfo.tpl */ ?>

<link rel="stylesheet" href="custom.css">
    <table class="center">
        <br>
        <tr>
            <td style="text-align: center">STT</td>
            <td style="text-align: center">Name</td>
            <td style="text-align: center">Unit Price</td>
            <td style="text-align: center">Quantity</td>
            <td style="text-align: center">Total</td>
        </tr>
        <tr>
            <?php $_from = $this->_tpl_vars['arrayResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
        <tr>
            <?php $_from = $this->_tpl_vars['col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
                <td style="text-align: center"><?php echo $this->_tpl_vars['row']; ?>
</td>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tr>
    </table>
