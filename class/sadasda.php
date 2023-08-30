<?php

$sql_query = "SELECT r.id, r.product_id, r.user_id, c.username, r.rate, r.review, r.created_at, r.updated_at FROM product_reviews as r LEFT JOIN customers as c ON (r.user_id = c.id) WHERE r.product_id = '".$id."' ";

?>