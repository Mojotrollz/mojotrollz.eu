<tr>
    <td>
        <button type="submit" class="btn_vote btn-sm btn ${btn_vote_color}" server="${id}" style="width: 95%;">
            <span class="glyphicon ${glyphicon_vote}" aria-hidden="true"> vote</span>
        </button>
    </td>
    <td><a href="${url}" target="blank">${name}</a></td>
    <td>
        <a href="${link_wow_${version_url}}">
            <img style="" data-pyroimage="true" src="./files/content/wow_${version_url}.png" alt="WoW" height="24" width="24">
            &nbsp;&nbsp;${version}
        </a>
    </td>
    <td>${score}</td>
    <td>${description}</td>
    <td>
        <button type="submit" class="btn-sm btn btn-primary" onClick="location.href='${url}'" style="width: 95%;">
            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
        </button>
    </td>
    <td>
        <button type="submit" class="btn-sm btn btn-primary" onClick="location.href='${link_wow_${version_url}}'" style="width: 95%;">
            <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
        </button>
    </td>
</tr>