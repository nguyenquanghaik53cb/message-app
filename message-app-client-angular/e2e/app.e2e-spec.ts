import { MessageAppClientAngularPage } from './app.po';

describe('message-app-client-angular App', function() {
  let page: MessageAppClientAngularPage;

  beforeEach(() => {
    page = new MessageAppClientAngularPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
