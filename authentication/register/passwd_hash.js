function mySubmit(obj) {
    var passwd = document.getElementById('passwd');
    var hash = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
    hash.update(passwd.value);
    var hash = hash.getHash("HEX");
    passwd.value = hash;
  }
