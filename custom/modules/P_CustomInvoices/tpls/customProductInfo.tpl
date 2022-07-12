
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
            {foreach from=$arrayResult item=col}
        <tr>
            {foreach from=$col item=row}
                <td style="text-align: center">{$row}</td>
            {/foreach}
        </tr>
        {/foreach}
        </tr>
    </table>

