let colorInputs = [];

for (let i = 0; i < 5; i++) {
  let element = document.getElementsByName('color-' + i)[0];
  let colorDisplay = document.getElementsByClassName('color')[i];

  element.addEventListener('change', function () {
    if (element.value.substring(0, 1) != '#') {
      element.value = '#' + element.value;
    }

    if (element.value.length > 7) {
      element.value = element.value.substring(0, 7);
    }

    if (element.value.length < 7) {
      let offset = 7 - element.value.length;

      element.value = element.value + '0'.repeat(offset);
    }

    colorDisplay.style.backgroundColor = element.value;
  });
}

let inputs = document.getElementsByTagName('input');

for (let i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      return false;
    }
  });
}
