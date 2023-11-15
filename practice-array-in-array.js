const data = [
    ['Name: Angie'],
    ['Surname: Neophytou'],
    ['Age: 39']
];

const paragraph = document.querySelector('p');


function displayData() {
    const unorderedList = document.querySelector('ul');
        for (i = 0; i < data.length; i += 1) {
            console.log(data[i]);
            for (j = 0; j < data[i].length; j += 1) {
                console.log(data[i][j]);
                const listItem = document.createElement('li');
                listItem.textContent = data[i][j];
                unorderedList.append(listItem);
            }
        }

}




paragraph.addEventListener('click', displayData);




