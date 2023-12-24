<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/ic_favicon.png">
    <title>संतवाणी  श्रंखला | आचार्य प्रशांत</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>
<?php include('header.php'); ?>

<div class="video-series-nav">
    <div class="text-video-series"  >Video Series</div>

    <?php
        $data = file_get_contents("https://api.acharyaprashant.org/v2/legacy/courses/tags");
        $tagsData = json_decode($data, true);
    ?>

<div class="all-video-series" >सभी
    <span class="down-arrow-series"onclick="toggleDropdownSeries(event)" id="parentDropdown" ></span>
    <span class="up-arrow-series" onclick="toggleDropdownSeries(event)" id="parentDropdown" style="display: none;"></span>
</div>

<div class="series-dropdown parent-item" id="parentDropdown">
    <div class="series-dropdown-content">
        <?php foreach ($tagsData[0] as $tag): ?>
            <div class="dropdown" onmouseover="showChildren(<?php echo $tag['tagId']; ?>)">
                <span class="series-dropdown-item">
                    <?php echo $tag['name']['hindi']; ?>
                </span>
                <span class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" class="fill-current"  >
                        <path fill-rule="evenodd" d="M.793 10.207a1 1 0 0 1 0-1.414L4.086 5.5.793 2.207A1 1 0 0 1 2.207.793l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414 0Z"></path>
                    </svg>
                </span>
            </div>
        <?php endforeach; ?>
        <div class="sub-list" id="childDropdown">
        </div>
    </div>
</div>

<div class="search-box">
    <input type="text" class="search-input" placeholder=" वीडियो श्रृंखलाएँ खोजें" >
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="search-icon">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>
</div>

    <a href="#" class="my-video-series-button">मेरी वीडियो श्रृंखलाएँ </a>
</div>

<?php

    $data = file_get_contents("https://api.acharyaprashant.org/v2/legacy/courses/series/optuser/course-series-eeb9d3");

    $apiData = json_decode($data, true);

    echo '<div class="custom-div" >';
    echo '<div>होम</div>';
    echo '<div class="arrow-sign">&gt;</div>';
    echo '<div class="hindi-text">' . $apiData['details']['title'] . '</div></div>';
    echo '<div class="new-block" >' . $apiData['details']['title'] . '</div>';
    echo '<div class="content-container" >';
    echo '    <div class="row">';
    echo '        <div class="col-md-5">';
    $imageWidth = 520; 
    $imageHeight = $imageWidth / $apiData['details']['thumbnail']['aspectRatio'];
    echo '            <img src="images/' . $apiData['details']['thumbnail']['key'] . '" alt="Sant Image" class="img-fluid" width="' . $imageWidth . '" height="' . $imageHeight . '">';
    echo '        </div>';
    echo '        <div class="col-md-7">';
    echo '            <div >';
    echo '                <div class="hindi-text">';
    echo '                    <div id="subtitle"><b>';
    echo '                        ' . $apiData['details']['subtitle'];
    echo '                    </b></div>';
    echo '                    <br>';
    echo '                    <div id="description">';
    echo '                        ' . $apiData['details']['description'];
    echo '                    </div>';
    echo '                </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
?>

<div class="share-container" >
    <div class="share-text">Share this series:</div>
    <div class="share-icons">
        <a class="fb" href="https://www.facebook.com/v5.0/dialog/share?app_id=671373654631248&channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1badaa664710f%26domain%3Dacharyaprashant.org%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Facharyaprashant.org%252Ff29bbb1b9d537e%26relation%3Dopener&display=popup&e2e=%7B%7D&fallback_redirect_uri=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&hashtag=%23AcharyaPrashant&href=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&locale=en_US&next=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df195ad8bc49e5f4%26domain%3Dacharyaprashant.org%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Facharyaprashant.org%252Ff29bbb1b9d537e%26relation%3Dopener%26frame%3Df31d4eee28d6ce8%26result%3D%2522xxRESULTTOKENxx%2522&quote=&sdk=joey&version=v5.0" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 19 34" class="h-7 w-7">
            <g fill="none" fill-rule="evenodd">
                <path d="M0 0h19v34H0z"></path>
                <path fill="#3E6FA7" stroke="#3E6FA7" stroke-width="1.393" d="M12.074 33H6.23l-.133-14.297H1V13.13h5.102l-.005-4.52C6.096 4.02 9.3 1 14.16 1l3.84.23v5.296h-3.394c-1.892 0-2.532 1.342-2.532 2.81v3.795h5.666l-.765 5.572h-4.9V33Z"></path>
            </g>
        </svg>
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      
        <a class="twitter ml-16" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&text=%0A&hashtags=AcharyaPrashant,VideoSeries,wisdom,spirituality" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  viewBox="0 0 38 34" class="h-7 w-7"><g fill="none" fill-rule="evenodd"><path d="M0 0h38v34H0z"></path><path fill="#08BBEE" d="M5.213 20.363a7.251 7.251 0 0 0 3.634-.251c-3.548-.578-6.262-3.748-6.262-7.572 0-.06 0-.119.002-.178a7.22 7.22 0 0 0 3.551.995c-2.13-1.348-3.553-3.773-3.553-6.542a7.82 7.82 0 0 1 1.05-3.931c3.78 4.663 9.323 7.75 15.572 8.17a8.141 8.141 0 0 1-.175-1.683c0-4.347 3.415-7.871 7.629-7.871 2.201 0 4.184.962 5.577 2.5a11.8 11.8 0 0 0 4.735-1.898A7.398 7.398 0 0 1 33.728 6.4 12.523 12.523 0 0 0 38 5.19a12.884 12.884 0 0 1-3.712 4.008l.002.173-.004.896c0 12.279-9.647 22.233-21.549 22.233-4.329 0-8.36-1.317-11.737-3.584.6.072 1.21.109 1.83.109 3.585 0 6.89-1.24 9.532-3.326-3.384 0-6.193-2.242-7.149-5.336Z"></path></g></svg>
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
        <a class="whatsapp ml-16" href="https://api.whatsapp.com/send/?text=%0Ahttps%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&type=custom_url&app_absent=0" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  viewBox="0 0 32 34" class="h-7 w-7 " ><g fill="none" fill-rule="evenodd"><path d="M0 0h32v34H0z"></path><path fill="#06BA27" d="M15.218 1.019c9.364-.445 17.065 7.145 16.774 16.455-.271 8.685-7.533 15.584-16.24 15.452A15.96 15.96 0 0 1 9.4 31.509l-.524-.249L.208 33l1.534-8.787A15.865 15.865 0 0 1 0 17.013C-.026 8.503 6.698 1.423 15.218 1.02Zm.781 3.098a13.055 13.055 0 0 0-9.205 3.804 12.888 12.888 0 0 0-3.812 9.184c0 1.889.393 3.7 1.17 5.392l.245.504.576 1.125-1.084 5.248 5.147-1.217 1.17.58a12.903 12.903 0 0 0 5.793 1.355 12.94 12.94 0 0 0 9.204-3.804 12.996 12.996 0 0 0 3.813-9.183c0-3.47-1.354-6.731-3.812-9.184a12.947 12.947 0 0 0-9.205-3.804ZM9.985 9.543a1.158 1.158 0 0 1 1.729.269l.075.143 1.304 2.943c.147.331.128.709-.044 1.02l-.098.15-.662.854c-.279.36-.316.854-.09 1.249.788 1.368 3.872 4.104 5.338 4.696.37.15.788.088 1.1-.147l.128-.111.758-.77c.26-.265.628-.386.989-.334l.154.033 3.1.888a1.152 1.152 0 0 1 .654 1.727c-.606.955-1.568 2.12-2.771 2.41-2.121.514-5.38.013-9.447-3.775-3.522-3.28-4.453-6.01-4.233-8.177.125-1.23 1.15-2.338 2.016-3.068Z"></path></g></svg>

        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class=" ml-16 linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  viewBox="0 0 35 34" class="h-7 w-7" ><g fill="none" fill-rule="evenodd"><path d="M0 0h35v34H0z"></path><path fill="#0A66C2" fill-rule="nonzero" d="M3.99 8.956c2.172 0 3.99-1.812 3.99-3.978C7.98 2.812 6.161 1 3.99 1 1.817 1 0 2.812 0 4.978c0 2.166 1.817 3.978 3.99 3.978ZM.665 33h6.65V10.9H.664V33ZM25.71 10.282c-2.926 0-5.143 1.06-6.34 2.696V10.9h-6.649V33h6.65V20.934c0-3.138 1.684-4.553 4.122-4.553 2.128 0 3.857 1.282 3.857 4.022V33H34V19.43c0-5.966-3.812-9.148-8.29-9.148Z"></path></g></svg>
        </a>
    </div>
</div>

<?php
    
    echo '<div class="video-series"><b> Video Series (' . $apiData['details']['coursesCount'] . ')</b></div>';
?>

<div class="course-section">

    <?php

    $courseCount = $apiData['details']['coursesCount'];

    echo '<div class="row ml-8">';

    for ($courseIndex = 0; $courseIndex < $courseCount; $courseIndex++) {

        $hours = floor($apiData['courses'][$courseIndex]['courseHours']);
        $minutes = round(($apiData['courses'][$courseIndex]['courseHours'] - $hours) * 60);

        echo '<a href="https://acharyaprashant.org/en/courses/course/' . $apiData['courses'][$courseIndex]['id'] . '" style="text-decoration: none;"><div class="md-4 ml-34">';

        echo '<div class="course-box"><br/>';

        echo '<div class="gray-box">भाग ' . ($courseIndex + 1) . '</div>';
        echo '<div id="course_title" style="color: #646668;"><b>' . $apiData['courses'][$courseIndex]['title'] . '</b></div>';
        echo '<div class="mb-15" id="course_subtitle" >' . $apiData['courses'][$courseIndex]['subtitle'] . '</div>';
        
        if ($hours > 0) {
            echo '<div class="mb-15 font-color" >' . $hours . ' Hours';
            
            if ($minutes > 0) {
                echo ' ' . $minutes . ' Minutes';
            }
            
            echo '</div>';
        } else {
            echo '<div class="mb-15 font-color" >' . $minutes . ' Minutes</div>';
        }

        echo '<div class="mb-15 font-color" id="course_amount" ">Contribution: ₹' . $apiData['courses'][$courseIndex]['amount'] . '<span class="line-through font-color" id="original_amount" > ₹' . $apiData['courses'][$courseIndex]['originalAmount'] . '</span></div>';
        echo '<div class="mb-15 "><button class="orange-button" id="course_language" >' . ucfirst($apiData['courses'][$courseIndex]['language']) . '</button></div>';

        echo '<div class="add-to-cart">Add to cart | Enroll</div><br/>';
        echo '</div>';
        echo '</div></a>';
    }

    echo '</div>';
?>

</div>
<?php

    $data = file_get_contents("https://api.acharyaprashant.org/v2/legacy/courses/faqs?language=english");

    $faqs  = json_decode($data, true);

?>

<div class="faq-section">
    <div class="faq-box-heading"">
        <h2 class="faq-font"><b>अक्सर पूछे जाने वाले प्रश्न</b></h2>
        <p>आप जिस उत्तर की तलाश कर रहे हैं वह नहीं मिल रहा है? कृपया हमारी <a target="_blank" href="https://acharyaprashant.org/hi/technical-support"><span style="color:#DD6B20">सपोर्ट</span></a> टीम से संपर्क करें।</p>
    </div>  
    <div class="faq-box">
        <div class="faq-content" id="faqContent">
            <?php $totalFaqs = count($faqs); ?>
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="faq-item <?php echo ($index === $totalFaqs - 1) ? 'last-faq' : ''; ?>">
                    <div class="faq-question" id="faq_question_<?php echo htmlspecialchars($faq['question']); ?>">
                        <b><?php echo $faq['question']; ?></b>
                        <span class="arrow" onclick="toggleAnswer(this)">&#x25BE;</span>
                    </div>
                    <div class="faq-answer" id="faq_answer_<?php echo htmlspecialchars($faq['question']); ?>" >
                        <?php echo $faq['answer']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<div class="off-canvas-wrapper">

    <div id="offCanvas" class="off-canvas">
        <div class="cancel-sign ">
            <a href="#" id="cancelButton" onclick="closeOffCanvas()">&#10006;</a>
        </div>
        <div class="pd-5">
             <span ><b>Hemlata Khatri</b></span>
        </div> 
        <div class="">
            <div class="">
                <div class="pd-5">
                    <span class="fs-13">hemlata.khatri14@gmail.com  &nbsp;&nbsp;&nbsp;<span class="color-theam">कॉपी</span></span>
                </div>
            </div>
        </div>
        <hr/>
        <p class="p-font-size">श्रीमद् भगवद् गीता</p>
        <p class="p-font-size">संत सरिता</p>
        <p class="p-font-size">वेदांत संहिता</p>
        <p class="p-font-size">वेदांत संहिता</p>
        <p class="p-font-size">बोध प्रत्यूषा</p>
        <p class="p-font-size">पुस्तकें</p>
        <p class="p-font-size">लेख</p>
        <p class="p-font-size">वीडियो श्रृंखलाएँ</p>
        <p class="p-font-size">ए.पी. सर्किल</p>
        <p class="p-font-size">कॉलेज संवाद के लिए आमंत्रित करें</p>
        <p class="p-font-size">इंटरव्यू के लिए आमंत्रित करें</p>
        <p class="p-font-size">मीडिया व प्रेस प्रकाशनी</p>
        <p class="p-font-size">सम्पर्क करें</p>
        <p class="p-font-size">करियर</p>
        <p class="p-font-size">योगदान करें</p>
        <hr/>
        <p class="p-font-size">मेरी वीडियो श्रृंखलाएँ</p>
        <p class="p-font-size">मेरी ई-पुस्तकें</p>
        <p class="p-font-size">रिकॉर्डेड सत्र</p>
        <p class="p-font-size">मेरी कार्ट</p>
        <p class="p-font-size">मेरे अनुदान</p>
        <p class="p-font-size">मेरे ऑर्डर्स</p>
        <p class="p-font-size">छात्रवृत्ति अनुरोध</p>
        <hr/>
        <p class="p-font-size">अधिक जानें</p>
        <p class="p-font-size">प्रशांतअद्वैत फाउंडेशन</p>
        <p class="p-font-size">घर घर उपनिषद</p>
        <p class="p-font-size">आचार्य प्रशांत के बारे में</p>
        <hr/>
        <p class="p-font-size">विषयों को देखें</p>
        <p class="p-font-size">वेदांत - उपनिषद</p>
        <p class="p-font-size">वेदांत - श्रीमद्भगवद्गीता</p>
        <p class="p-font-size">अन्य ग्रन्थ</p>
        <p class="p-font-size">संत और दार्शनिक</p>
        <p class="p-font-size">विविध धाराएँ</p>
        <p class="p-font-size">जीवन सम्बंधित प्रश्न</p>
        <p class="p-font-size">तकनीकी सहायता</p>
        <div class="">
            <a id="" href="">
                <span class="">लॉगआउट
                </span>
            </a>
        </div>
    </div> 
</div>

</div>

<br/>
<br/>
<?php include('footer.php'); ?>
<script>

    function toggleDropdown() {
        var dropdownContent = document.querySelector('.language-dropdown-content');
        var downArrow = document.querySelector('.down-arrow');
        var upArrow = document.querySelector('.up-arrow');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.language-dropdown-content');
        var downArrow = document.querySelector('.down-arrow');
        var upArrow = document.querySelector('.up-arrow');

        if (!event.target.matches('.down-arrow') && !event.target.matches('.up-arrow')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });

    function toggleDropdownSession() {
        var dropdownContent = document.querySelector('.session-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-session');
        var upArrow = document.querySelector('.up-arrow-session');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.session-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-session');
        var upArrow = document.querySelector('.up-arrow-session');

        if (!event.target.matches('.down-arrow-session') && !event.target.matches('.up-arrow-session')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });

    function toggleDropdownInvite() {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (!event.target.matches('.down-arrow-invite') && !event.target.matches('.up-arrow-invite')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });

    function toggleDropdownInvite() {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (!event.target.matches('.down-arrow-invite') && !event.target.matches('.up-arrow-invite')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });
    
    function toggleDropdownSeries(event) {
        var dropdownContent = document.querySelector('.series-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-series');
        var upArrow = document.querySelector('.up-arrow-series');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }

        event.stopPropagation();
    }
    
    function showChildren(parentTagId) {
        var tagData = <?php echo json_encode($tagsData[1]); ?>;
        
        var matchingData = tagData.filter(function (childTag) {
            return childTag.parent === parentTagId;
        });

        var content = '';
        if (matchingData.length > 0) {
            matchingData.forEach(function (childTag, index) {
                content += '<div class="series-dropdown-item">' + childTag.name.hindi + '</div>';

                if (index === 6 && matchingData.length > 7) {
                    content += '<div class="scroll-indicator"></div>';
                }
            });
        } else {
            document.querySelector('.arrow').style.display = 'none';
        }

        document.getElementById('childDropdown').innerHTML = content;
    }

    function hideChild(element) {
        element.style.display = 'none';
    }

    document.body.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.series-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-series');
        var upArrow = document.querySelector('.up-arrow-series');

        if (event.target.id !== 'parentDropdown') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            if (dropdownContent.style.display === 'block') {
                dropdownContent.style.display = 'none';
                downArrow.style.transform = 'rotate(0deg)';
                upArrow.style.transform = 'rotate(180deg)';
            } else {
                dropdownContent.style.display = 'block';
                downArrow.style.transform = 'rotate(180deg)';
                upArrow.style.transform = 'rotate(0deg)';
            }
        }
    });

    // Prevent the click event on the dropdown itself from triggering the body click handler
    document.querySelector('.all-video-series').addEventListener('click', function (event) {
        event.stopPropagation();
    });

    function toggleAnswer(arrow) {
        var faqItem = arrow.closest('.faq-item');
        var answer = faqItem.querySelector('.faq-answer');
        
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            var allAnswers = document.querySelectorAll('.faq-answer');
            allAnswers.forEach(function (element) {
                element.style.display = 'none';
            });

            answer.style.display = 'block';
        }
    }

    document.getElementById('hindiLink').classList.add('active');
    
    document.getElementById('hindiLink').addEventListener('click', function () {
        document.getElementById('hindiLink').classList.add('active');
        document.getElementById('englishLink').classList.remove('active');
        document.querySelector('.en-style').textContent = 'HI';
    });

    document.getElementById('englishLink').addEventListener('click', function () {
        document.getElementById('englishLink').classList.add('active');
        document.getElementById('hindiLink').classList.remove('active');
        document.querySelector('.en-style').textContent = 'EN';
    });

    function toggleMenu() {
        const offCanvas = document.getElementById('offCanvas');
        offCanvas.style.display = 'block';
        offCanvas.style.right = offCanvas.style.right === '0' ? '-100%' : '0';
    }

    function closeOffCanvas() {
        var offCanvas = document.getElementById('offCanvas');
        offCanvas.style.display = 'none';
    }

</script>

</body>
</html>
