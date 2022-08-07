import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

import DateTimeIndexField from './components/date-time/IndexField'
import DateTimeDetailField from './components/date-time/DetailField'
import DateTimeFormField from './components/date-time/FormField'

Nova.booting((app, store) => {
    app.component('index-persian-date', IndexField)
    app.component('detail-persian-date', DetailField)
    app.component('form-persian-date', FormField)

    app.component('index-persian-date-time', DateTimeIndexField)
    app.component('detail-persian-date-time', DateTimeDetailField)
    app.component('form-persian-date-time', DateTimeFormField)
})
