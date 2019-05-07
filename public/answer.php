<?php

// return an NCCO to greet users and connect them into the conference call

$json = '[
    {
        "action": "talk",
        "text": "Thank you for joining the call today. You will now be added to the conference.",
        "voiceName": "Nicole"
    },
    {
        "action": "conversation",
        "name": "weekly-team-meeting"
    }
]
';

header("Content-Type: application/json");
echo $json;

