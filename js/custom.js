const options = document.querySelector(".options").children;
const answerTrackerContainer = document.querySelector(".answers-tracker");
const questionNumberSpan = document.querySelector(".question-num-value");
const totalQuestionSpan = document.querySelector(".total-question");
const correctAnswerSpan = document.querySelector(".correct-answers");
const totalQuestionSpan2 = document.querySelector(".total-question2");
const percentage = document.querySelector(".percentage");
const question = document.querySelector(".question");
const op1 = document.querySelector(".option1");
const op2 = document.querySelector(".option2");
const op3 = document.querySelector(".option3");
const op4 = document.querySelector(".option4");
let questionIndex;
let index = 0;
let myArray = [];
let myArr = [];
let score = 0;

// questions and options and answers

const questions = [{
        q: 'The following elements header, footer, articl>, sectio> are the new elements in HTML5. These elements are called,',
        options: ['Control attributes', 'Semantic elements', 'Graphics elements',
            'Multimedia elements'
        ],
        answer: 2
    },
    {
        q: 'If I do not put <! DOCTYPE html>, will HTML 5 work?',
        options: [
            "Yes, browser will be able to identify that it's a HTML document and HTML 5 tags will function properly",
            'No, browser will not be able to identify that it’s a HTML document and HTML 5 tags will not function properly',
            'all the above', 'none of these'
        ],
        answer: 2
    },
    {
        q: 'What is the replacement for cookies in HTML5?',
        options: ['Web beacons', ' Java scripts', ' Local Storage', 'All the above'],
        answer: 3
    },
    {
        q: 'The default character encoding in HTML5 is.',
        options: ['ISO-8859-1', 'UTF-32 ', 'UTF-8 ', 'UTF-16'],
        answer: 3
    },
    {
        q: ' How many new form elements are introduced in HTML5?',
        options: ['2', '6', '3', '4'],
        answer: 3
    }
]

// set questions and options and question number
totalQuestionSpan.innerHTML = questions.length;

function load() {
    questionNumberSpan.innerHTML = index + 1;
    question.innerHTML = questions[questionIndex].q;
    op1.innerHTML = questions[questionIndex].options[0];
    op2.innerHTML = questions[questionIndex].options[1];
    op3.innerHTML = questions[questionIndex].options[2];
    op4.innerHTML = questions[questionIndex].options[3];
    index++;
}

function check(element) {
    if (element.id == questions[questionIndex].answer) {
        element.classList.add("correct");
        updateAnswerTracker("correct")
        score++;
        console.log("score:" + score)
    } else {
        element.classList.add("wrong");
        updateAnswerTracker("wrong")

    }
    disabledOptions()
}

function disabledOptions() {
    for (let i = 0; i < options.length; i++) {
        options[i].classList.add("disabled");
        if (options[i].id == questions[questionIndex].answer) {
            options[i].classList.add("correct");
        }

    }
}

function enableOptions() {
    for (let i = 0; i < options.length; i++) {
        options[i].classList.remove("disabled", "correct", "wrong");
    }
}

function validate() {
    if (!options[0].classList.contains("disabled")) {
        alert("Please Select one option")
    } else {
        enableOptions();
        randomQuestion();
    }
}

function next() {
    validate();
}

function randomQuestion() {
    let randomNumber = Math.floor(Math.random() * questions.length);
    let hitDuplicate = 0;
    if (index == questions.length) {
        quizOver();
    } else {
        if (myArray.length > 0) {
            for (let i = 0; i < myArray.length; i++) {
                if (myArray[i] == randomNumber) {
                    hitDuplicate = 1;
                    break;
                }
            }
            if (hitDuplicate == 1) {
                randomQuestion();
            } else {
                questionIndex = randomNumber;
                load();
                myArr.push(questionIndex);
            }
        }
        if (myArray.length == 0) {
            questionIndex = randomNumber;
            load();
            myArr.push(questionIndex);
        }

        myArray.push(randomNumber);

    }
}

function answerTrakcer() {
    for (let i = 0; i < questions.length; i++) {
        const div = document.createElement("div")
        answerTrackerContainer.appendChild(div);
    }
}

function updateAnswerTracker(classNam) {
    answerTrackerContainer.children[index - 1].classList.add(classNam);
}

function quizOver() {
    document.querySelector(".quiz-over").classList.add("show");
    correctAnswerSpan.innerHTML = score;
    totalQuestionSpan2.innerHTML = questions.length;
    percentage.innerHTML = (score / questions.length) * 100 + "%";
}

function tryAgain() {
    window.location.reload();
}

window.onload = function () {
    randomQuestion();
    answerTrakcer();

}