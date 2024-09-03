var csrfToken = $('meta[name="csrf-token"]').attr('content');
$(window).on('load', function() {
    var delayMs = 1000;
    var query = $("#category_id").val();
    $.ajax({
        url: "/api/get-subcategory/" + query,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
        },
        success: function(data) {
            $('#myModal').modal('show');
            populateRadioButtons(data);
        },
        error: function() {
            alert('Failed to fetch API data.');
        }
    });
});

function populateRadioButtons(data) {
    var radioGroup = $('#titleForm');
    data.forEach(function (item) {
        

        var label_start = '<label>'
        var label_end = '</label>'

        var radioButton = $(label_start + '<input type="radio" name="title" class="card-input-element" value="' + item.subcategory_id + '"><div class="panel panel-default card-input"><div class="panel-heading">' + item.name + '</div></div>'+label_end);


        radioGroup.append(radioButton);

    });

    // Display the form after populating radio buttons
    $("#selectTitle").css('display', 'block');
    $("#titleForm").css({
        'display': 'flex',
        'margin-top': '20px'
    });
    $("#header-menu").css('display', 'block');
}

document.getElementById("titleForm").addEventListener("click", function(event) {
    if (event.target.tagName === "INPUT") {
        const clickedValue = event.target.value;
        $("#subcategoryId").val(clickedValue);
    }
});

let questionsData = [];
let currentQuestionIndex = 0;
let answers = [];
let userDetail = [];
let pincode = '';
$("#selectTitle").click(function() {
    var query = $("#subcategoryId").val();
    $("#head-title").hide();
    if (query != '') {
        questionsData = []; // Reset questions data
        currentQuestionIndex = 0;
        // $("#questionModal").modal("show");
        $.ajax({
            url: "/api/get-questions",
            type: 'POST',
            data: { subcategory_id: query },
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
            },
            success: function(res) {
                if (res && res.data.length > 0) {
                    questionsData = res.data;
                    $("#question-text").css('display', 'block');
                    $("#titleForm").css('display', 'none');
                    $("#selectTitle").css('display', 'none');
                    $("#next-button").css('display', 'block');
                    $("#header-menu").css('display', 'block');
                    displayQuestion();
                } else {
                    $("#question-text").css('display', 'none');
                    $("#textForm").css('display', 'block');
                    $("#next-button").css('display', 'none');
                    $("#header-menu").css('display', 'block');
                    $("#submit-button1").css('display', 'block');
                    $("#titleForm").css('display', 'none');
                    $("#selectTitle").css('display', 'none');
                }
            }
        });
    }

});

function displayQuestion() {
    if (currentQuestionIndex >= questionsData.length) {
        $("#submit-button1").css('display', 'block');
        $("#options-form").css('display', 'none');
        $("#textForm").css('display', 'block');
        $('#question-text').css('display', 'none');
        $("#next-button").css('display', 'none');
        $("#header-menu").css('display', 'block');
        
    } else {
        const currentQuestion = questionsData[currentQuestionIndex];
        $("#question-text").text(currentQuestion.question);

        const optionsForm = $("#options-form");
        optionsForm.empty();

        currentQuestion.options.forEach((option, index) => {
            optionsForm.append(`
                <div class="form-check" id="questionandans">
                    <input class="form-check-input" type="checkbox" name="answer" value="${index}" id="option${index}">
                    <label class="form-check-label" class="fs-4" for="option${index}">${option}</label>
                </div>
            `);
        });
        $("#next-button").prop("disabled", true);
        // Enable Next button when an option is selected
        $('input[name="answer"]').change(function() {
            $("#next-button").prop("disabled", false);
        });
    }


}

$('#submit-button1').click(function() {
    $("#textForm").css('display', 'none');
    $('#submit-button1').css('display', 'none');
    $("#submit-button2").css('display', 'block');
    $("#pincodeForm").css('display', 'block');
    $("#header-menu").css('display', 'none');
    $("#header1").css('display', 'block');
});

$('#submit-button2').click(function() {
    let pinCode = $("#numberInput").val();
    if (pinCode != '') {
        $("#next-button").css('display', 'none');
        $("#textForm").css('display', 'none');
        $('#submit-button1').css('display', 'none');
        $("#submit-button").css('display', 'none');
        $("#verifyMobile").css('display', 'block');
        $("#header-menu").css('display', 'block');
        $("#header1").css('display', 'none');
        $("#submit-button2").css('display', 'none');
        $("#pincodeForm").css('display', 'none');

    } else {
        $("#error").text('Please the Pincode');
        setTimeout(function() {
            $("#error").text('');
        }, 5000);
    }


});

$("#next-button").click(function() {
    const selectedAnswerIndex = $('input[name="answer"]:checked').val();
    if (selectedAnswerIndex === undefined) {
        alert("Please select an answer.");
        return;
    }
    // Handle the selected answer here (you can store it or perform other actions)
    const currentQuestion = questionsData[currentQuestionIndex];
    const selectedAnswer = currentQuestion.options[selectedAnswerIndex];
    answers.push({ question: currentQuestion.question, answer: selectedAnswer, category_id: currentQuestion.category_id, subcategory_id: currentQuestion.subcategory_id });
    currentQuestionIndex++;
    displayQuestion();
});

$("#submit-button").click(function() {
    let name = $('#userName').val();
    let email = $('#userEmail').val();
    let gender = $('#userGender').val();
    let pincode = $('#numberInput1').val();
    if (name != '' && email != '' && gender != '') {
        userDetail['name'] = name;
        userDetail['email'] = email;
        userDetail['gender'] = gender;
        $("#detail-form").css('display', 'none');
        $('#submit-button').css('display', 'none');
        $('#Verify-mobile').css('display', 'inline');
        $("#verifyMobile").css('display', 'block');
        $("#header1").css('display', 'block');
        $("#header-menu").css('display', 'none');

    } else {
        $("#error").text('Please Enter all Details');
        setTimeout(function() {
            $("#error").text('');
        }, 5000);
    }
});
$("#Verify-Otp").click(function() {
    let mobile = $('#mobileNumber').val();
    if (mobile != '') {
        userDetail['mobileNumber'] = mobile;
        sendOtpFunction(mobile);
    } else {
        $("#error").text('Please Enter Mobile Number');
        setTimeout(function() {
            $("#error").text('');
        }, 5000);
    }
});
// Reset the modal when it is hidden
$("#questionModal").on("hidden.bs.modal", function() {
    questionsData = [];
    currentQuestionIndex = 0;
});


$('#edit_mobile').click(function() {
    $("#verifyMobile").css('display', 'block');
    $("#submitOtp").css('display', 'none');
    $('#submitData').css('display', 'none');
    $('#Verify-mobile').css('display', 'inline');
    $('#header1').css('diaplay', 'block');
    $('#header').css('diaplay', 'none');
});

function sendOtpFunction(mobile) {
    $.ajax({
        url: "/api/request-otp",
        type: 'POST',
        data: { mobileNumber: mobile },
        headers: {
            'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
        },
        success: function(res) {
            if (res == 1) {
                $("#success1").text('OTP Sent!');
                setTimeout(function() {
                    $("#success1").text('');
                }, 5000);
                $('#mobileNumber').text(mobile);
                $('#Verify-mobile').css('display', 'none');
                $('#verifyMobile').css('display', 'none');
                $('#submitOtp').css('display', 'block');
                $('#submitData').css('display', 'none');
                $('#submitData').attr('disabled', true);
            } else {
                $("#error").text('Something went Wrong!');
                setTimeout(function() {
                    $("#error").text('');
                }, 5000);
            }
        }
    });
}

$('#validate').click(function() {
    let first = $('#first').val();
    let second = $('#second').val();
    let third = $('#third').val();
    let fourth = $('#fourth').val();
    let fifth = $('#fifth').val();
    let sixth = $('#sixth').val();
    
    let otp = first + second + third + fourth + fifth + sixth;

    const start = Date.now();
    $.ajax({
        url: "/api/validate-otp",
        type: 'POST',
        data: { otp: otp, otp_time: start, mobile: userDetail['mobileNumber'] },
        headers: {
            'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
        },
        success: function(res) {
            if (res.error != '') {
                $("#error").text(res.error);
                setTimeout(function() {
                    $("#error").text('');
                }, 5000);
            } else {
                $('#validateOtp').css('display', 'none');
                $("#success").text(res.error);
                setTimeout(function() {
                    $("#error").text('');
                }, 3000);
                // $('#submit-button2').css('display','block');
                // $('#submit-button2').attr('disabled',false);
                $("#detail-form").css('display', 'block');
                $('#submitData').removeAttr('disabled');
                $("#head-title").hide();
                $("#submitData").css('display', 'block');
            }
        }
    });
});

$('#ResendOtp').click(function() {
    let mobile = $('#mobileNumber').val();
    sendOtpFunction(mobile);
})

$('#submitData').click(function() {
    var query = $("#subcategory_id").val();
    let name = $('#userName').val();
    let email = $('#userEmail').val();
    let gender = $('#userGender').val();
    if (name != '' && email != '' && gender != '') {
        userDetail['name'] = name;
        userDetail['email'] = email;
        userDetail['gender'] = gender;
        $("#detail-form").css('display', 'none');
        $('#submit-button').css('display', 'none');
        $('#Verify-mobile').css('display', 'none');
        $("#verifyMobile").css('display', 'none');
        $('#submitData').attr('disabled', true);
        saveLeads();
    } else {
        $("#error").text('Please Enter all Details');
        setTimeout(function() {
            $("#error").text('');
        }, 5000);
    }
});

$('#submitData1').click(function() {
    var query = $("#subcategory_id").val();
    let name = $('#userName').val();
    let email = $('#userEmail').val();
    let gender = $('#userGender').val();
    let mobile = $('#mobileNumber').val();
    if (name != '' && email != '' && gender != '') {
        userDetail['name'] = name;
        userDetail['email'] = email;
        userDetail['gender'] = gender;
        userDetail['mobileNumber'] = mobile;
        $("#thanks2").css('display', 'block');
        $("#detail-form").css('display', 'none');
        $('#submit-button').css('display', 'none');
        $('#Verify-mobile').css('display', 'none');
        $("#verifyMobile").css('display', 'none');
        $("#next-button").css('display', 'none');
        $("#textForm").css('display', 'none');
        $('#submit-button1').css('display', 'none');
        $("#submit-button").css('display', 'none');
        $("#verifyMobile").css('display', 'block');
        $('#submitData').attr('disabled', true);
        saveLeads();
    } else {
        $("#error").text('Please Update you Basic Details');
        setTimeout(function() {
            $("#error").text('');
        }, 5000);
    }
});

function saveLeads() {
    var query = $("#subcategoryId").val();

    $.ajax({
        url: "/api/registerAndSubmitLeadData",
        type: 'POST',
        data: {
            answers: answers,
            mobile: userDetail['mobileNumber'],
            name: userDetail['name'],
            email: userDetail['email'],
            gender: userDetail['gender'],
            location_id: $('#location_id').val(),
            comment: $('#otherDetails').val(),
            subcategory_id: query,
            pinCodeValue: $('#pinCodeValue').val(),
            disticName: $('#disticName').val(),
            stateName: $('#stateName').val(),
            areaName: $('#areaName').val(),
        },
        headers: {
            'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
        },
        success: function(res) {
            if (res) {
                var query = res.subcategory_id;
                // $('#validateSuccess').css('display', 'none');
                // $('#thanks').css('display', 'block');

                // $('#submitData').css('display', 'none');


                // Get the current URL
                const currentUrl = window.location.href;

                // Split the URL by '/'
                const parts = currentUrl.split('/');

                // Get the last part after the last '/'
                const lastPart = parts[parts.length - 1];

                let location = $('#location_id').val();

                $('#validateSuccess').css('display', 'none');
                $('#submitData').css('display', 'none');
                
                //$('#thanks').css('display', 'block');

                $('#myModal').modal('hide');
                
                $('.modal.fade.show, .modal-backdrop.fade.show').hide();

                $('#leadReqSuccessMsg').html(res.success_msg);

                console.log(res.success_msg);
                console.log(res);
                

                $('#thankYouMdl').modal('show');

                setTimeout(function() {
                    window.location.href = '/category/profile-listing/' + lastPart + '?location_id='+ location  +'&subcategory_id='+query+'&min_rating=';
                }, 2500);
                
            } else {
                $('#submitData').attr('disabled', false);
            }
        },
        error: function (request, status, error) {      
            alert(request.responseJSON['message']);               
            window.location.href = '/';           
        }
    });
}
$(document).ready(function() {
    $('#closeButton').click(function() {
        if (confirm("Are you sure that you want to leave?")) {
            $('#myModal').modal('hide');
        }
    });
});

$(document).ready(function() {
    $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
    });
});

let digitValidate = function(ele) {
    console.log(ele.value);
    ele.value = ele.value.replace(/[^0-9]/g, '');
}

let tabChange = function(val) {
    let ele = document.querySelectorAll('.bx-input');
    if (ele[val - 1].value != '') {
        ele[val].focus();
    } else if (ele[val - 1].value == '') {
        ele[val - 2].focus()
    }
}

$(document).ready(function() {
    var addressSuggestions = $('#addressSuggestions');

    $('#numberInput').keyup(function() {
        var query = $(this).val();

        if (query.length > 3) {
            $.ajax({
                url: "/api/get-location",
                type: 'POST',
                data: { query: query },
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
                },
                success: function(data) {
                    console.log(data);
                    if (data.length > 0) {
                        addressSuggestions.empty();
                        $.each(data.slice(0, 10), function(index, item) {
                            var listItem = $('<li id="search-list">').text(item.pincode + ', ' + item.name + ', ' + item.district_name);
                            listItem.on('click', function() {
                                $('#location_id').val(item.id);
                                $('#pinCodeValue').val(item.pincode);
                                $('#disticName').val(item.district_name);
                                $('#stateName').val(item.state_name);
                                $('#areaName').val(item.name);
                                addressSuggestions.hide();
                                // Append the clicked item's HTML to the input field
                                $('#numberInput').val(listItem.text());
                            });
                            addressSuggestions.append(listItem);
                        });

                        addressSuggestions.show();
                    } else {
                        addressSuggestions.empty();
                        addressSuggestions.append('<li id="search-list">No Data Found</li>');
                        addressSuggestions.show();
                    }
                },
            });
        } else {
            addressSuggestions.empty();
            addressSuggestions.hide();
        }
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.single-input').length) {
            addressSuggestions.hide();
        }
    });
});

jQuery('#mobileNumber').on('keypress keyup', function() {
    let mobile = $('#mobileNumber').val();
    if (mobile.length == '10') {
        $.ajax({
            type: 'post',
            url: "/api/verifyUserMobile",
            data: {
                "mobile": mobile,
                "request_type": 'check-mobile'
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
            },
            beforeSend: function() {
                jQuery(".loader").css('display', 'inline-block');
            },
            success: function(res) {
                if (res.status == 1) {
                    jQuery('#submitData1').css('display', 'block');
                    jQuery('#Verify-mobile').css('display', 'none');
                    $('#userName').val(res.data.name);
                    $('#userEmail').val(res.data.email);
                    $('#userGender').val(res.data.gender);

                } else {
                    jQuery('#Verify-mobile').css('display', 'inline');
                    jQuery('#submitData').css('display', 'none');
                    jQuery('#submit-button2').css('display', 'none');
                    jQuery('#submitData1').css('display', 'none');
                    $('#userName').val('');
                    $('#userEmail').val('');
                    $('#userGender').val('');
                }
                jQuery(".loader").css('display', 'none');
            }
        });
    }
});