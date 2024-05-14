<?php
include '../db_config.php';
include '../session_start.php';

$questions = array(
    1 => array(
        'question' => 'Which of the following best describes your body frame?',
        'options' => array(
            'vata' => 'a) Thin, light, and slender',
            'pitta' => 'b) Moderate, athletic, and muscular',
            'kapha' => 'c) Solid, stocky, and sturdy'
        )
    ),
    2 => array(
        'question' => 'How would you describe your skin?',
        'options' => array(
            'vata' => 'a) Dry, thin, and cool',
            'pitta' => 'b) Warm, sensitive, and prone to redness',
            'kapha' => 'c) Oily, thick, and smooth'
        )
    ),
    3 => array(
        'question' => 'What\'s your typical appetite like?',
        'options' => array(
            'vata' => 'a) Irregular, often forget to eat',
            'pitta' => 'b) Strong, get hungry easily',
            'kapha' => 'c) Steady, can skip meals without feeling hungry'
        )
    ),
    4 => array(
        'question' => 'How do you respond to stress?',
        'options' => array(
            'vata' => 'a) Anxiety, worry, and nervousness',
            'pitta' => 'b) Anger, irritability, and impatience',
            'kapha' => 'c) Sluggishness, lethargy, and withdrawal'
        )
    ),
    5 => array(
        'question' => 'What\'s your sleep pattern like?',
        'options' => array(
            'vata' => 'a) Light sleeper, have trouble falling asleep',
            'pitta' => 'b) Deep sleeper, but may wake up occasionally',
            'kapha' => 'c) Heavy sleeper, love to sleep long hours'
        )
    ),
    6 => array(
        'question' => 'How do you handle changes in weather?',
        'options' => array(
            'vata' => 'a) Easily affected, dislike cold and dry climates',
            'pitta' => 'b) Prefer moderate temperatures, dislike heat',
            'kapha' => 'c) Love warmth, dislike cold and dampness'
        )
    ),
    7 => array(
        'question' => 'How would you describe your digestion?',
        'options' => array(
            'vata' => 'a) Irregular, prone to gas and bloating',
            'pitta' => 'b) Strong, but can experience heartburn or acidity',
            'kapha' => 'c) Steady, rarely experience digestive issues'
        )
    ),
    8 => array(
        'question' => 'What\'s your energy level like throughout the day?',
        'options' => array(
            'vata' => 'a) High energy in short bursts, followed by crashes',
            'pitta' => 'b) Moderate and consistent energy levels',
            'kapha' => 'c) Slow and steady, not easily exhausted'
        )
    ),
    9 => array(
        'question' => 'How do you prefer to spend your free time?',
        'options' => array(
            'vata' => 'a) Engaging in creative or intellectual pursuits',
            'pitta' => 'b) Participating in competitive or challenging activities',
            'kapha' => 'c) Relaxing, enjoying nature, or spending time with loved ones'
        )
    ),
    10 => array(
        'question' => 'Which climate do you feel most comfortable in?',
        'options' => array(
            'vata' => 'a) Warm and humid',
            'pitta' => 'b) Moderate and temperate',
            'kapha' => 'c) Cool and dry'
        )
    ),
    11 => array(
        'question' => 'How do you react to spicy foods?',
        'options' => array(
            'vata' => 'a) Dislike, they upset my stomach',
            'pitta' => 'b) Enjoy, but can\'t handle too much',
            'kapha' => 'c) Love, I can handle spicy foods well'
        )
    ),
    12 => array(
        'question' => 'How do you deal with change?',
        'options' => array(
            'vata' => 'a) Find it difficult, prefer routine and stability',
            'pitta' => 'b) Adapt easily, but may feel impatient',
            'kapha' => 'c) Embrace change, enjoy variety and new experiences'
        )
    ),
    13 => array(
        'question' => 'What\'s your attitude towards exercise?',
        'options' => array(
            'vata' => 'a) Prefer gentle, slow-paced activities like yoga or walking',
            'pitta' => 'b) Enjoy moderate-intensity workouts like jogging or cycling',
            'kapha' => 'c) Prefer intense workouts like weightlifting or HIIT'
        )
    ),
    14 => array(
        'question' => 'How do you handle conflicts?',
        'options' => array(
            'vata' => 'a) Avoid confrontation, tend to withdraw or compromise',
            'pitta' => 'b) Address issues directly, can be argumentative',
            'kapha' => 'c) Remain calm, try to find a peaceful resolution'
        )
    ),
    15 => array(
        'question' => 'What\'s your approach to decision-making?',
        'options' => array(
            'vata' => 'a) Indecisive, weigh all options carefully',
            'pitta' => 'b) Decisive, trust my instincts and make quick decisions',
            'kapha' => 'c) Thoughtful, consider multiple perspectives before deciding'
        )
    )
);

$total_questions = count($questions);
$current_question = isset($_POST['question_number']) ? (int)$_POST['question_number'] : 1;

$user_answers = array();

function calculate_dosha($user_answers)
{
    $dosha_scores = array(
        'vata' => 0,
        'pitta' => 0,
        'kapha' => 0
    );

    foreach ($user_answers as $answer) {
        $dosha_scores[$answer]++;
    }

    $max_score = max($dosha_scores);
    $dosha_type = array_search($max_score, $dosha_scores);

    return $dosha_type;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['answer'])) {
    $user_answers[] = $_POST['answer'];
}

if ($current_question <= $total_questions) {
    $current_question_data = $questions[$current_question];
} else {
    $dosha_type = calculate_dosha($user_answers);
    $sql = "UPDATE users SET dosha='$dosha_type' WHERE id='" . $_SESSION['user_id'] . "'";
    if ($conn->query($sql) === TRUE) {
        echo "Dosha type updated successfully.";
    } else {
        echo "Error updating dosha type: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dosha Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php if ($current_question <= $total_questions) : ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-5" onsubmit="return validateForm()">
                <input type="hidden" name="question_number" value="<?php echo $current_question + 1; ?>">
                <div class="question">
                    <p class="h5">Question <?php echo $current_question; ?>:</p>
                    <p class="lead"><?php echo $current_question_data['question']; ?></p>
                </div>
                <div class="options">
                    <?php foreach ($current_question_data['options'] as $option => $text) : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" value="<?php echo $option; ?>" id="<?php echo $option; ?>">
                            <label class="form-check-label" for="<?php echo $option; ?>">
                                <?php echo $text; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Next Question</button>
            </form>
        <?php else : ?>
            <div class="dosha-result mt-5">
                <p class="h4">Your Dosha Type: <?php echo $dosha_type; ?></p>
                <p><a href="../index.php" class="btn btn-secondary mt-3">Back to Dashboard</a></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

<script>
    function validateForm() {
        var options = document.getElementsByName("answer");
        var isChecked = false;
        for (var i = 0; i < options.length; i++) {
            if (options[i].checked) {
                isChecked = true;
                break;
            }
        }
        if (!isChecked) {
            alert("Please select an option before moving to the next question.");
            return false;
        }
        return true;
    }
</script>

