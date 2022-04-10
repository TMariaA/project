<?
AddEventHandler("main", "OnAfterUserAdd", array("MyClass","OnAfterUserAddHandler"));
class MyClass
{
    function OnAfterUserAddHandler(&$arFields)
    {

        if ($arFields["ID"] > 0) {
            if ($arFields["UF_REG_GROUP_USER"] == "1")
            {
                $arGroups = CUser::GetUserGroup($arFields["ID"]);
                $arGroups[] = 7;
                CUser::SetUserGroup($arFields["ID"], $arGroups);
            } elseif ($arFields["UF_REG_GROUP_USER"] == "2") {
                $arGroups = CUser::GetUserGroup($arFields["ID"]);
                $arGroups[] = 6;
                CUser::SetUserGroup($arFields["ID"], $arGroups);
            }
        }
        
    }
}
?>