


$data's structure get from error_log

[your-query] is the radio group's selection in the contact-form-7


```
Array  |  Array
(
    [_wpcf7] => 469
    [_wpcf7_version] => 4.4.2
    [_wpcf7_locale] => en_US
    [_wpcf7_unit_tag] => wpcf7-f469-o1
    [your-name] => john doe
    [your-email] => johndoe@mycompany.com
    [your-company] => my company name
    [your-subject] => about your company
    [your-query] => Array
        (
            [0] => Developers
        )

    [your-message] => $data
    [quiz-4711] => 93
    [_wpcf7_quiz_answer_quiz-4711] => 3501468c744f965e33a3808f20f5f6ab
    [_wpcf7_is_ajax_call] => 1
)

```



```
wpcf7_do_something  |  Array
(
    [subject] => [your-subject]my company Contact Form
    [sender] => [your-name]<info@mycompany.com>
    [body] => From: [your-name] <[your-email]>
Subject: [your-subject] [your-query]

Message Body:
[your-company]
[your-query]
[your-message]

--
This e-mail was sent from a contact form on my company (http://www.mycompany.com)
    [recipient] => Developers <developers@mycompany.com>
    [additional_headers] => Reply-To: [your-email] <info@mycompany.com>
    [attachments] => 
    [use_html] => 
    [exclude_blank] => 
)
```
