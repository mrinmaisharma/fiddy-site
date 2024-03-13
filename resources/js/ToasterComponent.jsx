import React, { useEffect } from 'react';
import {createRoot} from 'react-dom/client';
import { Notifier, notify } from './utils/notify';

function ToasterComponent() {

    useEffect(()=>{
        const handleToastEvent = (event) => {
            const msg = event.detail.message;
            const type = event.detail.type;
            notify(msg,type);
        }
        window.addEventListener('notify',handleToastEvent);
        return window.addEventListener('notify',handleToastEvent);
    },[])

    return ( <div>
        <Notifier />
    </div> );
}

export default ToasterComponent ;

const container = document.getElementById('toaster');

if (container) {
    const root = createRoot(container);
    root.render(<ToasterComponent />);
}