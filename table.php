<!DOCTYPE html>
<html>
<style>
    
    table, th, td {
    border: 1px solid black;
 }
td { 
    padding: 40px;
    text-align: center;
}
.grid-container{
    display: grid;
    grid-template-areas: 
        'one one one two'
        'three three four five'
        'six seven seven eight';
        width: 50%;
        grid-gap: 2px;
        padding: 2px;
        background: black;
}

.grid-container div{
    padding: 40px;
    text-align: center;
    background-color: white;
}

.one { grid-area: one; }
.two { grid-area: two; }
.three { grid-area: three; }
.four { grid-area: four; }
.five { grid-area: five; }
.six { grid-area: six; }
.seven { grid-area: seven; }
.eight{ grid-area: eight; }
</style>

<body>

<h2> HTML Table </h2>


<br>
<table>
        <tr>
            <td colspan="3">1</td>
            <td colspan="1">2</td>
        </tr>
        <tr>
            <td colspan="2">3</td>
            <td colspan="1">4</td>
            <td colspan="1">5</td>
        </tr>
        <tr>
            <td colspan="1">6</td>
            <td colspan="2">7</td>
            <td colspan="1">8</td>
        </tr>
        <tr style="visibility: hidden;">
            <td colspan="1"></td>
            <td colspan="1"></td>
            <td colspan="1"></td>
            <td colspan="1"></td>
        </tr>

    </table>
    <div class="grid-container">
    <div class="one">1</div>
    <div class="two">2</div>
    <div class="three">3</div>
    <div class="four">4</div>
    <div class="five">5</div>
    <div class="six">6</div>
    <div class="seven">7</div>
    <div class="eight">8</div>
</div>

</body>
</html>