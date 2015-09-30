<?php
namespace SQL;
class CRON_CALCULATE_VOTES extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'UPDATE mojotrollz_server server 
INNER JOIN
(
   SELECT server, COUNT(*) as sum_votes
   FROM mojotrollz_vote
   GROUP BY server
) vote
ON server.id = vote.server
SET server.score = server.score + vote.sum_votes';
    }
}