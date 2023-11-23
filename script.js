function searchData() {
    var query = document.getElementById('searchQuery').value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                displayResult(response);
            } else {
                document.getElementById('result').innerHTML = 'aldaa garrlaa'
            }
        }
    };
    xhr.open('GET', 'searchdata.php?query=' + query, true);
    xhr.send();
}
function displayResult(result) {
    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = '';
    if ('error' in result) {
        resultDiv.innerHTML = result.error;
        return;
    }
    var ul = document.createElement('ul');
    for (var i in result) {
        var li = document.createElement('li');
        li.textContent = i + ': ' + result[i];
        ul.appendChild(li);
    }
    resultDiv.appendChild(ul);
}