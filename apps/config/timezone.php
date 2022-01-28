<?php
 /** 
 *------------------------------------------------------------------------------------------------------
 * DEFAULT TIMEZONE
 * @author nagara
 * @return time wilayah indoneisa ASIA/INDONESIA
 *------------------------------------------------------------------------------------------------------
 *
 */
date_default_timezone_set('Asia/Jakarta');

 /** 
 *------------------------------------------------------------------------------------------------------
 * Format Time ZONE
 * date('H:i:s') = 12:26:17
 * @return time wilayah indoneisa ASIA/INDONESIA
 *------------------------------------------------------------------------------------------------------
 *
 */

function time_now()
{
    return date('H:i:s');
}

 /** 
 *------------------------------------------------------------------------------------------------------
 * Format Time ZONE pm/am
 * date('H:i:sa') = 12:26:17
 * @return time wilayah indoneisa ASIA/INDONESIA
 *------------------------------------------------------------------------------------------------------
 *
 */

function time_wib()
{
    return date("h:i:sa");
}

 /** 
 *------------------------------------------------------------------------------------------------------
 * Format Tahun
 * date("Y-m-d") = 2021-04-15
 * @return time wilayah indoneisa ASIA/INDONESIA
 *------------------------------------------------------------------------------------------------------
 *
 */

function date_now()
{
    return date("Y-m-d");
}


 /** 
 *------------------------------------------------------------------------------------------------------
 * Format Tahun
 * date("Y") = 2021
 * @return time wilayah indoneisa ASIA/INDONESIA
 *------------------------------------------------------------------------------------------------------
 *
 */

function year_now()
{
    return date("Y");
}
