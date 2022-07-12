
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
        {foreach from=$arrayResult item=col}
        <tr>
            {foreach from=$col item=row}
                <td>{$row}</td>
            {/foreach}
        </tr>
        {/foreach}
        </tr>
    </table>