const a = document.querySelector('a');
const select = document.querySelector('.select');
a.onchange = async() => {
    const number = Number(select.value);
    const output = document.querySelector('p');
    const response = await fetch(`./index.php?num=${number}`, {method: "GET"});
    const data = await response.text();
    output.innerText = data;
    select.children[number - 1].disabled = true;
};