<?
AddEventHandler("main", "OnAfterUserAdd", array("AssignmentGroupUsers","OnAfterUserAddHandler"));
class AssignmentGroupUsers
{

    const  GROUP_VENDOR = 7;
    const GROUP_BUYER = 6;
    function OnAfterUserAddHandler(&$arFields)
    {

        if ($arFields["ID"] > 0) {
            if ($arFields["UF_REG_GROUP_USER"] == "1")
            {
                $arGroups = CUser::GetUserGroup($arFields["ID"]);
                $arGroups[] = self::GROUP_VENDOR;
                CUser::SetUserGroup($arFields["ID"], $arGroups);
            } elseif ($arFields["UF_REG_GROUP_USER"] == "2") {
                $arGroups = CUser::GetUserGroup($arFields["ID"]);
                $arGroups[] = self::GROUP_BUYER;
                CUser::SetUserGroup($arFields["ID"], $arGroups);
            }
        }
        
    }
}
?>