
plugin.tx_tp3businessview_tp3businessview {
  view {
    templateRootPaths.0 = EXT:tp3_businessview/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_tp3businessview_tp3businessview.view.templateRootPath
    partialRootPaths.0 = EXT:tp3_businessview/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_tp3businessview_tp3businessview.view.partialRootPath
    layoutRootPaths.0 = EXT:tp3_businessview/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_tp3businessview_tp3businessview.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_tp3businessview_tp3businessview.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_tp3businessview._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-tp3-businessview table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-tp3-businessview table th {
        font-weight:bold;
    }

    .tx-tp3-businessview table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
