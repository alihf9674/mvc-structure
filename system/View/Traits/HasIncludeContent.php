<?php

namespace  System\View\Traits;

trait HasIncludeContent
{

    private function checkIncludesContent()
    {
        while (1) {
            $includesNamesArray = $this->findIncludesNames();
            if (!empty($includesNamesArray)) {
                foreach ($includesNamesArray as $includeName) {
                    $this->initialIncludes($includeName);
                }
            } else 
                break;
            
        }
    }

    private function findIncludesNames()
    {
        $includesNamesArray = [];
        preg_match_all("/@include+\('([^)]+)'\)/", $this->content, $includesNamesArray, PREG_UNMATCHED_AS_NULL);
        return isset($includesNamesArray[1]) ? $includesNamesArray[1] : false;
    }

    private function initialIncludes($include_name)
    {
        $this->content = str_replace("@include('$include_name')", $this->viewLoader($include_name), $this->content);
    }
}
