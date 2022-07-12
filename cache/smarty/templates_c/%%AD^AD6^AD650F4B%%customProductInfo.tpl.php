<?php /* Smarty version 2.6.11, created on 2022-07-12 09:11:30
         compiled from custom/modules/P_CustomInvoices/tpls/customProductInfo.tpl */ ?>

    <table>
        <br>
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Total</td>
        </tr>
        <tr>
        <?php $_from = $this->_tpl_vars['arrayResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
        <tr>
            <?php $_from = $this->_tpl_vars['col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
                <td><?php echo $this->_tpl_vars['row']; ?>
</td>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tr>
    </table>