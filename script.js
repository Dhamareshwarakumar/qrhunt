let form = document.querySelector('form');
let team_name = document.querySelector('#team_name');
let phone_number = document.querySelector('#phone_number');
let player1 = document.querySelector('#player1');
let player1_jntu = document.querySelector('#player1_jntu');
let player1_section = document.querySelector('#player1_section');
let player2 = document.querySelector('#player2');
let player2_jntu = document.querySelector('#player2_jntu');
let player2_section = document.querySelector('#player2_section');
let player3 = document.querySelector('#player3');
let player3_jntu = document.querySelector('#player3_jntu');
let player3_section = document.querySelector('#player3_section');
let player4 = document.querySelector('#player4');
let player4_jntu = document.querySelector('#player4_jntu');
let player4_section = document.querySelector('#player4_section');



let state = {
    team_name: '',
    phone_number: '',
    player1: '',
    player1_jntu: '',
    player1_section: '',
    player2: '',
    player2_jntu: '',
    player2_section: '',
    player3: '',
    player3_jntu: '',
    player3_section: '',
    player4: '',
    player4_jntu: '',
    player4_section: '',
}

let redundancy_error = false;

const PH_NO_REGEX = /^(\+91)?[456789][0-9]{9}$/;    // Indian Version
const NAME_REGEX = /^[a-zA-Z0-9_ ,\(\)-]{3,32}$/;
const JNTU_REGEX = /^[0-9A-Za-z]{10}$/;
// const JNTU_REGEX = /^[1-2][0-9]34[15]A[01][0-9A-Z]{3}$/;
const SECTION_REGEX = /^[A-Za-z]$/;


// Sweet ALert pop ups
function success(message) {
    Swal.fire(message, '', 'success');
}

function wrong(error) {
    Swal.fire('OOPS!', error, 'error');
}



function handleForm(e) {
    state[e.name] = e.value;
}

function isEmpty(data) {
    return data === undefined || data === null || (typeof data === 'object' && Object.keys(data).length === 0) || (typeof data === 'string' && data.trim().length === 0)
}

function isValid(element) {
    element.classList.remove('is-invalid');
    element.classList.add('is-valid');
    let feedback = element.parentElement.querySelector('.feedback')
    feedback.style.display = 'none'
    return;
}

function isInvalid(element, message) {
    element.classList.add('is-invalid');
    element.classList.remove('is-valid');

    let feedback = element.parentElement.querySelector('.feedback')
    feedback.style.display = 'block'
    feedback.classList.add('invalid-feedback');
    feedback.classList.remove('valid-feedback');
    feedback.innerHTML = message;
    return;
}


form.addEventListener('submit', e => {
    e.preventDefault();
    error = false;

    // contact Number Validation
    if (isEmpty(phone_number.value.trim())) {
        isInvalid(phone_number, 'Contact Number is required');
        error = true;
    } else if (!PH_NO_REGEX.test(phone_number.value.trim())) {
        isInvalid(phone_number, 'Invalid Contact Number');
        error = true;
    } else {
        isValid(phone_number);
    }


    // Player 1 Name Validation
    if (isEmpty(player1.value.trim())) {
        isInvalid(player1, 'Player 1 Name is required');
        error = true;
    } else if (!NAME_REGEX.test(player1.value.trim())) {
        isInvalid(player1, 'Player 1 Name must be alphanumeric and between 3-32 characters long');
        error = true;
    } else {
        isValid(player1);
    }


    // Player 2 Name Validation
    if (isEmpty(player2.value.trim())) {
        isInvalid(player2, 'Player 2 Name is required');
        error = true;
    } else if (!NAME_REGEX.test(player2.value.trim())) {
        isInvalid(player2, 'Player 2 Name must be alphanumeric and between 3-32 characters long');
        error = true;
    } else {
        isValid(player2);
    }


    // Player 3 Name Validation
    if (isEmpty(player3.value.trim())) {
        isInvalid(player3, 'Player 3 Name is required');
        error = true;
    } else if (!NAME_REGEX.test(player3.value.trim())) {
        isInvalid(player3, 'Player 3 Name must be alphanumeric and between 3-32 characters long');
        error = true;
    } else {
        isValid(player3);
    }


    // Player 4 Name Validation
    if (isEmpty(player4.value.trim())) {
        isInvalid(player4, 'Player 4 Name is required');
        error = true;
    } else if (!NAME_REGEX.test(player4.value.trim())) {
        isInvalid(player4, 'Player 4 Name must be alphanumeric and between 3-32 characters long');
        error = true;
    } else {
        isValid(player4);
    }


    // Player 1 JNTU Number Validation
    player1_jntu.value = player1_jntu.value.toUpperCase();
    if (isEmpty(player1_jntu.value.trim())) {
        isInvalid(player1_jntu, 'Player 1 JNTU Number is required');
        error = true;
    } else if (!JNTU_REGEX.test(player1_jntu.value.trim())) {
        isInvalid(player1_jntu, 'Invalid Player 1 JNTU Number');
        error = true;
    } else {
        isValid(player1_jntu);
    }


    // Player 2 JNTU Number Validation
    player2_jntu.value = player2_jntu.value.toUpperCase();
    if (isEmpty(player2_jntu.value.trim())) {
        isInvalid(player2_jntu, 'Player 2 JNTU Number is required');
        error = true;
    } else if (!JNTU_REGEX.test(player2_jntu.value.trim())) {
        isInvalid(player2_jntu, 'Invalid Player 2 JNTU Number');
        error = true;
    } else {
        isValid(player2_jntu);
    }


    // Player 3 JNTU Number Validation
    player3_jntu.value = player3_jntu.value.toUpperCase();
    if (isEmpty(player3_jntu.value.trim())) {
        isInvalid(player3_jntu, 'Player 3 JNTU Number is required');
        error = true;
    } else if (!JNTU_REGEX.test(player3_jntu.value.trim())) {
        isInvalid(player3_jntu, 'Invalid Player 3 JNTU Number');
        error = true;
    } else {
        isValid(player3_jntu);
    }


    // Player 4 JNTU Number Validation
    player4_jntu.value = player4_jntu.value.toUpperCase();
    if (isEmpty(player4_jntu.value.trim())) {
        isInvalid(player4_jntu, 'Player 4 JNTU Number is required');
        error = true;
    } else if (!JNTU_REGEX.test(player4_jntu.value.trim())) {
        isInvalid(player4_jntu, 'Invalid Player 4 JNTU Number');
        error = true;
    } else {
        isValid(player4_jntu);
    }


    // Player 1 Section Validation
    if (!SECTION_REGEX.test(player1_section.value.trim())) {
        isInvalid(player1_section, 'Invalid Player 1 Section');
        error = true;
    } else {
        isValid(player1_section);
    }


    // Player 2 Section Validation
    if (!SECTION_REGEX.test(player2_section.value.trim())) {
        isInvalid(player2_section, 'Invalid Player 2 Section');
        error = true;
    } else {
        isValid(player2_section);
    }


    // Player 3 Section Validation
    if (!SECTION_REGEX.test(player3_section.value.trim())) {
        isInvalid(player3_section, 'Invalid Player 3 Section');
        error = true;
    } else {
        isValid(player3_section);
    }


    // Player 4 Section Validation
    if (!SECTION_REGEX.test(player4_section.value.trim())) {
        isInvalid(player4_section, 'Invalid Player 4 Section');
        error = true;
    } else {
        isValid(player4_section);
    }


    // Checking For Multiple Entries
    if (player1_jntu.value.trim() == player2_jntu.value.trim() || player1_jntu.value.trim() == player3_jntu.value.trim() || player1_jntu.value.trim() == player4_jntu.value.trim() || player2_jntu.value.trim() == player3_jntu.value.trim() || player2_jntu.value.trim() == player4_jntu.value.trim() || player3_jntu.value.trim() == player4_jntu.value.trim()) {
        redundancy_error = true;
    } else {
        redundancy_error = false;
    }

    fetch('./includes/get_team_name.php')
        .then(response => response.json())
        .then(data => {
            console.log(data);

            // Team Name Validation
            if (isEmpty(team_name.value.trim())) {
                isInvalid(team_name, 'Team Name is required');
                error = true;
            } else if (team_name.value.trim().length < 3) {
                isInvalid(team_name, 'Team Name Should be of atleast 3 characters');
                error = true;
            } else if (data.includes(team_name.value.trim())) {
                isInvalid(team_name, 'Team Name Already Taken');
                error = true;
            } else {
                isValid(team_name);
            }

            if (error) {
                wrong("Form Has Errors Please Resolve Them First");
            } else if (redundancy_error) {
                wrong("All 4 Players Must be Different");
            } else {
                // submit the form
                form.submit()
            }
        })


})