<!-- schoonmaken


    syteem: klachten
    - klacht
    - datum
    - datum eersts
    - gewicht -> cleaneristrator kiest
    - klachten na week prioriteit
    - klacht aangewezen voor medewerker

    systeem: bezetting
    - naam klant
    - plaats
    - tijd aankomen
    - tijd vertrek
    
    systeem: weekoverzicht
    - plaats tijd bezet
    - plaats medewerker roosteren
-->

<?php include "../includes/header.php" ?>
<link rel="stylesheet" href="../css/styles.css">


<h1>Cleaner pagina</h1>
<div class="cleaner_Page">
    <div class="cleaner_Subject">
    <div class="cleaner_cleanerSec">
        <div class="cleanerSec_title">
            <h3>Klachten</h3>
        </div>
        <div class="cleanerSec_QuickAcces">
            <?php
               // Include the count_messages.php file
                require_once '../actions/function_counter.php';

                // Call the countMessages() function to get the total number of messages
                $totalMessages = countMessages()['total_messages'];

                // Display the total number of messages
                echo "Totaal klachten: " . $totalMessages;
            ?>
        </div>
        <div class="cleanerSec_scroll">
            <?php
                include '../actions/klacht_create.php';
              ?>
        </div>
    </div>
    <div class="cleaner_cleanerSec">
    <div class="cleanerSec_title">
            <h3>Velden</h3>
        </div>
        <div class="cleanerSec_QuickAcces">
            <p>Totaal bezet of vrij</p>
        </div>
        <div class="cleanerSec_scroll">
            <?php
                include '../actions/bezet_create.php';
              ?>
        </div>

    </div>
    <div class="cleaner_cleanerSec">
    <div class="cleanerSec_title">
            <h3>Users</h3>
        </div>
        <div class="cleanerSec_QuickAcces">
            <p>...Total Users...</p>
            <p>...Amin...</p>
            <p>...cleaner...</p>
            <p>...Amin...</p>
        </div>
        <div class="cleanerSec_scroll">
        <div class="cleanerSec_scroll">
            <div class="User">
                <div class="field_data">
                        <p>...User ID...</p>
                        <p>...User Role...</p>
                        <p>...User Name...</p>
                        <p>...User Mail...</p>
                        <p>...User Address...</p>
                        <p>...User Birthdate...</p>
                </div>
                <div class="cleanerCom_buttons">
                    <button>...edit...</button>
                    <button>...delete...</button>
                </div>
            </div>
            <div class="User">
                <div class="field_data">
                        <p>...User ID...</p>
                        <p>...User Role...</p>
                        <p>...User Name...</p>
                        <p>...User Mail...</p>
                        <p>...User Address...</p>
                        <p>...User ...</p>
                        <p>...Customer Name...</p>
                </div>
                <div class="cleanerCom_buttons">
                    <button>...edit...</button>
                    <button>...delete...</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
</div>
<?php include '../includes/footer.php'?>