const pickupDateInput = document.querySelector('#pick-up-date');
const datetimeInvisible = document.querySelector('.datetime-invisible');
const datetimeInput = datetimeInvisible.querySelector('input[type=datetime-local]');

document.addEventListener('click', (event) => {
  if (datetimeInvisible.style.display === 'block' && 
      event.target !== pickupDateInput &&
      !datetimeInvisible.contains(event.target)) {
    datetimeInvisible.style.display = 'none';
  }
});

pickupDateInput.addEventListener('click', () => {
  console.log('Pick up date input field selected.');

  // Show the datetime-invisible element by setting its display property to "block"
  datetimeInvisible.style.display = 'block';

});

datetimeInput.addEventListener('input', () => {
  console.log(`Selected date time: ${datetimeInput.value}`);

  const datetime = new Date(datetimeInput.value);
const formattedDateTime = datetime.toLocaleString('en-US', { 
  month: 'long', 
  day: 'numeric', 
  year: 'numeric',
  hour: 'numeric',
  minute: 'numeric',
  hour12: true
});

  
  // Update the pick-up date input value with the selected date time
  pickupDateInput.value = formattedDateTime;
});

datetimeInput.addEventListener('blur', () => {
  console.log('Datetime picker closed.');
  // Apply display:none to the datetimeInvisible element
    datetimeInvisible.style.display = 'none';
});
