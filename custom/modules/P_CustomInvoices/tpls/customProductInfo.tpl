
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
        {foreach from=$arrayResult item=foo}
        <tr>
            {foreach from=$foo item=bar}
                <td>{$bar}</td>
            {/foreach}
        </tr>
        {/foreach}
        </tr>
    </table>