<tr>
    <td><a href="${url}" target="blank">${name}</a></td>
    <td>
        <a href="${magnet_${version}">
            <img style="" data-pyroimage="true" src="./api.php?call=files&cat=content&id=wow_${version}.png" alt="WoW" height="24" width="24">
            &nbsp;&nbsp;${version}
        </a>
    </td>
    <td>${description}</td>
    <td>${score}</td>
    <td>
        <button type="submit" class="btn_vote btn-sm btn ${btn_vote_color}" server="${id}">
            <span class="glyphicon ${glyphicon_vote}" aria-hidden="true"></span>
            &nbsp;&nbsp;Vote
        </button>
        <button type="submit" class="btn-sm btn btn-primary" onClick="location.href='${url}'">
            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            &nbsp;&nbsp;Visit
        </button>
        <button type="submit" class="btn-sm btn btn-primary" onClick="location.href='${magnet_${version}}'">
            <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
            &nbsp;&nbsp;Download
        </button>
    </td>
</tr>