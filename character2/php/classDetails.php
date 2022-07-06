<?php

/*Halfling */

function getHitPoints($level, $conMod)
{
    $hitPoints = 0;

    if($level < 10)
    {
        for($i = 0; $i < $level; ++$i)
        {
            $levelHP = rand(2, 6);
            $levelHP += $conMod;
    
            if($levelHP < 2)
            {
                $levelHP = 2;
            }
    
            $hitPoints += $levelHP;
    
        }
    }
    else
    {
        for($i = 0; $i < 10; ++$i)
        {
            $levelHP = rand(3, 8);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }

        $levelTenPlusHP = ($level - 9) * 3;

        $hitPoints += $levelTenPlusHP;

    }


    return $hitPoints;

}


function saveBreathAttack($level)
{
    if($level <= 3)
    {
        return 13;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 10;
    }
    else
    {
        return 7;
    }

}


function savePoisonDeath($level)
{
    if($level <= 3)
    {
        return 8;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 6;
    }
    else
    {
        return 4;
    }

}


function savePetrify($level)
{
    if($level <= 3)
    {
        return 10;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 8;
    }
    else
    {
        return 6;
    }

}


function saveWands($level)
{
    if($level <= 3)
    {
        return 9;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 7;
    }
    else
    {
        return 5;
    }

}


function saveSpells($level)
{
    if($level <= 3)
    {
        return 12;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 10;
    }
    else
    {
        return 8;
    }

}


function primeReq($dexterity, $strength)
{
    if($dexterity > 12 && $strength > 12)
    {
        if($dexterity > 15 && $strength > 15)
        {
            return "+10% Experience Point Adjustment (Prime Requisite)<br/><br/>";
        }
        else
        {
            return "+5% Experience Point Adjustment (Prime Requisite)<br/><br/>";
        }
    }
    else
    {
        return "";
    }
    
}

function secondAttack($level)
{
    if($level >= 15 && $level <= 18)
    {
        return "Fighter has 2 attacks per round.";
    }
    else if($level > 18)
    {
        return "Fighter has 3 attacks per round.";
    }
    else
    {
        return "";
    }

}


function strengthModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 to hit, damage & forcing doors";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 to hit, damage & forcing doors";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 to hit, damage & forcing doors";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 to hit, damage & forcing doors";
        }
    
    return $desc;
}


function dexterityModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "+3 AC; -3 Missile Attack; -2 Optional Initiative";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+2 AC; -2 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 AC; -1 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 AC; +1 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-2 AC; +2 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore === 18)
        {
            $desc = "-3 AC; +3 Missile Attack; +2 Optional Initiative";
        }
    
    return $desc;
}

function constitutionModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Hit Points per<br/>Hit Die";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Hit Points per<br/>Hit Die";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Hit Points per<br/>Hit Die";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Hit Points per<br/>Hit Die";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Hit Points per<br/>Hit Die";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Hit Points per<br/>Hit Die";
        }
    
    return $desc;
}


function intelligenceModifierDescription($abilityScore)
{
    $desc = "Able to read and write";
    
    if($abilityScore === 3)
        {
            $desc = "Unable to read or write; broken speech";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "Unable to read or write";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "Partial ability to write";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Languages; Able to read and write";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Languages; Able to read and write";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Languages; Able to read and write";
        }
    
    return $desc;
}


function wisdomModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Saving Throw against all magical effects";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Saving Throw against all magical effects";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Saving Throw against all magical effects";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Saving Throw against all magical effects";
        }
    
    return $desc;
}



function charismaModifierDescription($abilityScore)
{
    $desc = "+0 Reaction Ajustment; Max Retainers 4; Retainer Morale 7";
    
    if($abilityScore === 3)
        {
            $desc = "+2 Reaction Ajustment; Max Retainers 1; Retainer Morale 4";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 2; Retainer Morale 5";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 3; Retainer Morale 6";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 5; Retainer Morale 8";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 6; Retainer Morale 9";
        }
    else if($abilityScore === 18)
        {
            $desc = "-2 Reaction Ajustment; Max Retainers 7; Retainer Morale 10";
        }
    
    return $desc;
}


function getThaco($level, $abiltyMod)
{
    if($level == 1 || $level == 2)
    {
        $thaco = 19;
    }
    else if($level == 3)    
    {
        $thaco = 18;
    }
    else if($level == 4)    
    {
        $thaco = 17;
    }
    else if($level == 5)    
    {
        $thaco = 16;
    }
    else if($level == 6)    
    {
        $thaco = 15;
    }
    else
    {
        $thaco = 14;
    }

    $thaco -= $abiltyMod;

    return $thaco;
}

function getThacoCheck($score)
{
    if($score <= 2)
    {
        $score = 2;
    }

    return $score;
}


function demiHumanScoreMin($abilityScore)
{
    if($abilityScore < 9)
    {
        $abilityScore = 9;
    }

    return $abilityScore;
}


function halflingStronghold($level)
{
    if($level < 8)
    {
        return "";
    }
    else
    {
        return "Can build a stronghold in a serene, beautiful valley, that will attract halflings from great distances to settle there.";
    }
}

function halflingClassAbilities($alignment)
{
    return "90% ability to hide in bushes or outdoor cover.<br/><br/>2 in 6 chance of hiding in shadows or behind cover in <br/>underground environments.<br/><br/>+1 to all missile attack rolls.<br/><br/>-2 AC bonus when attack by creatures greater than human sized.<br/><br/>";
}



?>