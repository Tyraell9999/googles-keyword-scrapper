<?php
echo ' Masukan Keyword: ';
$key = trim(fgets(STDIN));
function getKeywordSuggestionsFromGoogle($keyword) {
    $keywords = array();
    $data = file_get_contents('http://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=id-ID&q='.urlencode($keyword));
    if (($data = json_decode($data, true)) !== null) {
        $keywords = $data[1];
    }

    return $keywords;
}

var_dump(getKeywordSuggestionsFromGoogle($key));