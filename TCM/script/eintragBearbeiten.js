function formelBearbeiten(ele) {
    
    var formelHeadline = ele.parentElement.firstChild.innerHTML;
    console.log(formelHeadline);
    
    var phpNewEntry = `
    <?php 
    
    $sql = SELECT 
                *
            FROM
                formel
            WHERE
                name = ` + formelHeadline + `;
    $result = mysqli_query($db, $sql);
    
    while ( $tuple = mysqli_fetch_assoc($result)) {
    echo '<h3>' . tuple[$name] . '</h3>';
    echo '<h4>Anwendungsgebiet</h4>';
    
    ?>`;
    
    ele.parentElement.innerHTML = phpNewEntry;


}