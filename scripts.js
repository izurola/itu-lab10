function searchData() {
    const searchValue = document.getElementById('searchQuery').value;
    console.log(searchValue);
    
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                displayResults(response);
            } else {
                console.error('Error:', xhr.status);
            }
        }
    };

    xhr.open('GET', `client.php?value=${searchValue}`, true);
    xhr.send();
}

function displayResults(data) {
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = '';

    if (data && Array.isArray(data)) {
        data.forEach(item => {
            const div = document.createElement('div');
            div.textContent = JSON.stringify(item);
            resultDiv.appendChild(div);
        });
    } else {
        console.error('Invalid data format');
    }
}