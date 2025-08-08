function validateForm() {
  const email = document.getElementById('email').value;
  const address = document.getElementById('address').value;
  const image = document.getElementById('image').value;
  const fullname = document.getElementById('fullname').value;
  const department = document.getElementById('department').value;
  const phone = document.getElementById('phone').value;

  if (!fullname || fullname.length < 3) {
    alert('Please enter a valid full name');
    return false;
  }
  if (!department || department.length < 2) {
    alert('Please enter a valid department');
    return false;
  }
  if (!phone.match(/^\d{10,15}$/)) {
    alert('Enter a valid phone number');
    return false;
  }
  if (!email.includes('@')) {
    alert('Invalid email address');
    return false;
  }
  if (address.length < 5) {
    alert('Address too short');
    return false;
  }
  if (image === '') {
    alert('Please upload an image');
    return false;
  }
  alert('Form submitted successfully!');
  return true;
}